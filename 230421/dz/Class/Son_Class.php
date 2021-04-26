<?php


class Son_Class extends Father_Class
{
    protected string $type="";
    protected string $name = "";

    /**
     * @param string $type
     * @return Son_Class
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = '';
        array_walk($this->data, function ($value) use (&$html) {
            $html .= "\t<li>$value</li>\n";
        });
        return "<$this->name type='$this->type'>\n$html</$this->name>";
    }
}