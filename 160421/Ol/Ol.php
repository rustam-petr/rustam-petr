<?php
class Ol
{
    protected array $data;
    protected string $type;

    /**
     * @param array $data
     * @return Ol
     */
    public function setData(array $data): Ol
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     * @return Ol
     */
    public function setType(string $type): Ol
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }
        return "<ol type='$this->type'>\n$html</ol>";
    }
}