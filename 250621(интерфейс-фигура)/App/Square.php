<?php

namespace App;

class Square implements IFigure
{
    protected float $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function square(): float
    {
        return $this->a ** 2;
    }

    public function per(): float
    {
        return 4 * $this->a;
    }

    public function name(): string
    {
        return "Квадрат";
    }
}