<?php


class Okr
{

    protected float $a;

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

class Okr1 extends Okr
{
    public function square()
    {
        return pi()*($this->a**2);
    }

    public function per()
    {
        return 2*pi()*$this->a;
    }

}
