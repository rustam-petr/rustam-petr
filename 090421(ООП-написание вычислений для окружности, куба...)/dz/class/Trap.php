<?php

class Trap extends Figure
{
    protected float $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        $this->b = $b;
    }

    public function square(): float
    {
        return ($this->a + $this->b) / 2 * sqrt($this->a * $this->b);
    }

    public function per(): float
    {
        return 2 * sqrt((2 * $this->square() / $this->a + $this->b) + ($this->a + $this->b) / 2) + $this->a + $this->b;
    }

}
