<?php


namespace App;

abstract class Figure
{
    protected float $a;
    protected float $b;

    public function __construct(float $a = 0, float $b = 0)
    {
        $this->setA($a);
        $this->setB($b);
    }

    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

}