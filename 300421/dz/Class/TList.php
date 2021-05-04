<?php


class TList
{
    protected array $data = [];
    protected string $num = "";
    protected string $tagName = "";

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): TList
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $num
     * @return $this
     */
    public function setNum(string $num): TList
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @param string $tagName
     * @return $this
     */
    public function setTagName(string $tagName): TList
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        $html = '';
        foreach ($this->data as $value) {
            $html .= "\t<li>$value</li>\n";
        }

        return "<$this->tagName type='$this->num'>\n$html</$this->tagName>\n";
    }


}