<?php


namespace App;


trait SquareTrait
{
    public function square(): float
    {
        return $this->a ** 2;
    }

    public function per(): float
    {
        return 4 * $this->a;
    }
}