<?php

class Okr extends Figure
{
    public function square(): float
    {
        return pi() * ($this->a ** 2);
    }

    public function per(): float
    {
        return 2 * pi() * $this->a;
    }
}