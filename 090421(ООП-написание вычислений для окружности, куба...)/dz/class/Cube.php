<?php

class Cube extends Figure
{
    public function square(): float
    {
        return 6 * ($this->a ** 2);
    }

    public function per(): float
    {
        return 12 * $this->a;
    }
}
