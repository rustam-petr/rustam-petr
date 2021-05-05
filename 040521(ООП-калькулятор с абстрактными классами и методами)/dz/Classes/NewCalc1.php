<?php


class NewCalc1 extends NewCalc
{
    public function sin(): float
    {
        return sin(deg2rad($this->a)) ;

    }
    public function sin1(): float
    {
        return sin(deg2rad($this->b)) ;

    }

    public function cos(): float
    {
        return cos(deg2rad($this->a)) && cos(deg2rad($this->b));
    }
}