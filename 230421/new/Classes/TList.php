<?php


class TList extends AbstractParent
{
    protected string $type="";
    protected string $tagName = "";

    /**
     * @param string $type
     * @return TList
     */
    public function setType(string $type): static
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
        return "<$this->tagName type='$this->type'>\n$html</$this->tagName>";
    }
}