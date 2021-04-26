<?php


class Table extends Father_Class
{
    protected array $headers = [];

    /**
     * @param array $headers
     * @return Table
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return string
     */
    public function html(): string
    {
        $html = "<table border='1'>";

        if (!empty($this->headers)) {
            $html .= "<tr>";

            array_map(function ($cell) use (&$html) {
                $html .= "<th>$cell</th>";
            }, $this->headers);

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