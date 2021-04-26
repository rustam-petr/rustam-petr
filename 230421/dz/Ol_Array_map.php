<?php


class Ol_Array_map
{
    protected array $data;
    protected string $type;

    /**
     * @param array $data
     * @return Ol_Array_map
     */
    public function setData(array $data): Ol_Array_map
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $type
     * @return Ol_Array_map
     */
    public function setType(string $type): Ol_Array_map
    {
        $this->type = $type;
        return $this;
    }

    public function html(): string
    {
        $html = "";
        $array_map(function ($x){return "<ol type='$this->type'>\n$html</ol>";},$this->data);
//        $html = "";
//        foreach ($this->data as $value) {
//            $html .= "\t<li>$value</li>\n";
//        }
//        return "<ol type='$this->type'>\n$html</ol>";
    }
}