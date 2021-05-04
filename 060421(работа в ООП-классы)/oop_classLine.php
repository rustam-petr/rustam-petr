<?php

class Line
{
    public float $x1, $x2;
    public float $y1, $y2;

    public function __construct($x1, $x2, $y1, $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }
}


$line = new Line(1, 2.5, 5, 3.5);


echo $line->x1;
echo $line->x2;
echo $line->y1;
echo $line->y2;
