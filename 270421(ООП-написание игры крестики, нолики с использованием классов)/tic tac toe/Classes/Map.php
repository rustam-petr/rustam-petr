<?php


class Map
{
    protected array $map = [];

    /**
     * @param $map
     * @return $this
     */
    public function setMap($map)
    {
        $this->map = $map;
        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlTable(): string
    {
        $html = "<table class='tictac'>";

        foreach ($this->map as $row) {

            $html .= "<tr>";
            foreach ($row as $cell) {
                if ($cell == "x") {
                    $html .= "<td>❌</td>";

                } elseif ($cell == "0") {
                    $html .= "<td>😀</td>";
                } else {
                    $html .= "<td></td>";
                }

            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;
    }

}