<?php

class Calc
{
    public float $a;
    public float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Sum(): float
    {
        return $this->a + $this->b;

    }

    public function Diff(): float
    {
        return $this->a - $this->b;

    }

    public function Multi(): float
    {
        return $this->a * $this->b;

    }

    public function Div(): float
    {
        return $this->a / $this->b;

    }
}

$calc = new Calc(1000, 500);

echo $calc->sum() . "<br>";
echo $calc->Diff() . "<br>";
echo $calc->Multi() . "<br>";
echo $calc->Div();

