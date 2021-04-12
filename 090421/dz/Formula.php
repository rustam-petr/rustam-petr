<?php

class Formula
{

    public float $a;

    public function __construct($a)
    {
        $this->setA($a);

    }

//сеттер
    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }


}

class Formula1 extends Formula
{
    public function square()
    {
        return 6 * ($this->a ** 2);
    }

    public function per()
    {
        return 12 * $this->a;
    }

}


