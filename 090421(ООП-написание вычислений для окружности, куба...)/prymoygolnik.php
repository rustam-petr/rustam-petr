<?php


class Rectangle
{

    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

//сеттер
    public function setA($a){
        if ($a>0){
            $this->a = $a;
        }
    }

//сеттер
    public function setB($b){
        if ($b>0){
            $this->b = $b;
        }
    }

    public function square()
    {
        return $this->a * $this->b;
    }
}

class Rectangle1 extends Rectangle
{

    public function per()
    {
        return 2*($this->a + $this->b);
    }
}

//$rectangle = new Rectangle(3, 2);
$rectangle1 = new Rectangle1(3, 2);

//echo $rectangle->square();
echo $rectangle1->per();

$rectangle1->setA(2);
$rectangle1->setB(2);
echo $rectangle1->per();


