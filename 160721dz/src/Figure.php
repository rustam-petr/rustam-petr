<?php


namespace App;

abstract class Figure
{
    protected float $a;
    protected float $b;


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