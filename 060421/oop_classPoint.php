<?php

class Point
{
    public float $x1, $y1;

    public function __construct($x1, $y1)
    {
        $this->x1 = $x1;
        $this->y1 = $y1;

    }
}

$point = new Point(1, 5.5);

echo $point->x1;
echo $point->y1;
