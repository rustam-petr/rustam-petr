<?php


namespace App;


class Rectangle implements IFigure
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function square(): float
    {
        return $this->a * $this->b;
    }

    public function per(): float
    {
        return 2 * $this->a + 2 * $this->b;
    }

    public function name(): string
    {
        return "Прямоугольник";
    }
}