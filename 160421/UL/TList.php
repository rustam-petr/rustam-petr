<?php


abstract class TList
{
    protected array $data;
    protected string $type;

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
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

        return $html;
    }
}