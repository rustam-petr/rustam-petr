<?php


namespace App;


trait RhombusTrait
{
    public function square(): float
    {
        return $this->a * $this->b;
    }

    public function per(): float
    {
        return 4 * $this->a;
    }
}