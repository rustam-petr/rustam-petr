<?php


class Triangle
{

    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

//сеттер
    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

//сеттер
    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }

    public function gip()
    {
        return sqrt($this->a ** 2 + $this->b ** 2);
    }
}

class Triangle1 extends Triangle
{
    public function square1()
    {
        return (1 / 2) * ($this->a * $this->b);
    }

    public function per()
    {
        return $this->a + $this->b + $this->gip();
    }

}


$gip = new Triangle1(0.5, 0.6);

echo $gip->per();

//$gip->setA(2);
//$gip->setB(2);
//
//echo $gip->gip();