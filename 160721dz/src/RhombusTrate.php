<?php


namespace App;


trait RhombusTrate
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