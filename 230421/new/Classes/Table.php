<?php

class Table extends AbstractParent
{
    protected array $headers = [];

    /**
     * @param array $headers
     * @return Table
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        $html = "<table class='$this->class'>";

        if (!empty($this->headers)) {
            $html .= "<tr>";

            array_map(function ($cell) use (&$html) {
                $html .= "<th>$cell</th>";
            }, $this->headers);
//            array_map(fn($cell) =>"<th>$cell</th>" ,$this->headers);

            $html .= "</tr>";
        }
        array_map(function ($row) use (&$html) {
            $html .= "<tr>";

            array_map(function ($cell) use (&$html) {
                $html .= "<td>$cell</td>";
            }, $row);

            $html .= "</tr>";

        }, $this->data);

        $html .= "</table>";

        return $html;
    }
}