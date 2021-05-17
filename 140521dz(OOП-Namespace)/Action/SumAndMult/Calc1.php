<?php


namespace SumAndMult;

class Calc1
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function mult(): float
    {
        return $this->a * $this->b;
    }
}