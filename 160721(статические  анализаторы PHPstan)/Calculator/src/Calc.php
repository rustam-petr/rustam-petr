<?php

namespace App;
class Calc
{

    public float $a;
    public float $b;

    public function __construct(float $a, float $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    public function setA(float $a)
    {
        $this->a = $a;
        return $this;
    }


    public function setB(float $b)
    {
        $this->b = $b;
        return $this;
    }


    public function sum(): float
    {
        return $this->a + $this->b;

    }


}