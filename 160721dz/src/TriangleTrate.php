<?php


namespace App;


trait TriangleTrate
{
    public function square(): float
    {
        return ($this->a * $this->b) / 2;
    }

    public function per(): float
    {
        return sqrt($this->a ** 2 + $this->b ** 2) + $this->a + $this->b;
    }
}