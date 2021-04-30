<?php


class Map extends TicTac
{
    protected array $qwe;

    public function setMap()
    {
        $this->qwe=$this->getMap();
        return $this;
    }
    /**
     * @return string
     */
    public function html(): string
    {
        $html = "<table border='1'>";

           foreach ($this->qwe as $row) {

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