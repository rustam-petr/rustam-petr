<?php

namespace App;

class Rectangle implements ISquare
{
    protected float $a;
    protected float $b;

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a)
    {
        $this->a = $a;
        return $this;
    }

    /**
     * @param float $b
     * @return $this
     */
    public function setB(float $b)
    {
        $this->b = $b;
        return $this;
    }

    public function square(): float
    {
        return $this->a * $this->b;
    }

}