<?php


namespace App;


class Square implements ISquare
{
    protected float $a;


    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a)
    {
        $this->a = $a;
        return $this;
    }


    public function square(): float
    {
        return $this->a ** 2;
    }
}