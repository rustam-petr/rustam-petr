<?php


class TList
{
    protected array $data = [];
    protected string $type = "";
    protected string $tagName = "";

    /**
     * TList constructor.
     * @param $data
     * @param $type
     * @param $tagName
     */
    public function __construct($data=[], $type="1", $tagName="ol")
    {
        $this->setData($data);
        $this->setType($type);
        $this->setTagName($tagName);
    }

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
     * @param string $type
     * @return $this
     */
    public function setType(string $type): TList
    {
        $this->type = $type;
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

        return "<$this->tagName type='$this->type'>\n$html</$this->tagName>\n";
    }


}