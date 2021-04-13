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

class Trap
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
}

class Trap1 extends Trap
{
    public function square()
    {
        return ($this->a + $this->b)/2*sqrt($this->a * $this->b);
    }

    public function per()
    {
        return 2*sqrt((2*$this->square()/$this->a+$this->b) + ($this->a + $this->b)/2)+$this->a+$this->b;
    }
}
