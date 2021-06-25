<?php


namespace App;


class Сircle implements IFigure
{
    protected float $rad;


    public function __construct($rad)
    {
        $this->rad = $rad;

    }

    public function square(): float
    {
        return pi()*$this->rad**2;
    }

    public function per(): float
    {
        return 2*pi()*$this->rad;
    }

    public function name(): string
    {
        return "Окружность";
    }
}