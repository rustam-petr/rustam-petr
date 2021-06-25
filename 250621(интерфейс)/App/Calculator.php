<?php

namespace App;

class Calculator implements ICalculator,ICalc
{
    protected int $a;
    protected int $b;

    /**
     * @param int $a
     * @return $this
     */
    public function setA(int $a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param int $b
     * @return $this
     */
    public function setB(int $b)
    {
        $this->b = $b;
        return $this;

    }

    /**
     * @return int
     */
    public function sum(): int
    {
        return $this->a + $this->b;
    }

    /**
     * @return int
     */
    public function mult(): int
    {
        return $this->a * $this->b;

    }

    /**
     * @return float
     */
    public function div(): float    {
        return $this->a / $this->b;

    }
    /**
     * @return float
     */
    public function diff(): float    {
        return $this->a - $this->b;

    }
}