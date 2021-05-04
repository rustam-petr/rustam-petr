<?php
class Table
{
    protected array $data = [];
    protected array $headers = [];
    protected string $class = "";

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

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
     * @param string $class
     * @return Table
     */
    public function setClass(string $class)
    {
        $this->class = $class;
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

            foreach ($this->headers as $cell) {
                $html .= "<th>$cell</th>";
            }
            $html .= "</tr>";
        }
        foreach ($this->data as $row) {

            $html .= "<tr>";
            foreach ($row as $cell) {

                $html .= "<td>$cell</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }
}