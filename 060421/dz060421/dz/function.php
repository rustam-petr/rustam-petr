<?php

class Operation {
    public float $a;

    public function __construct($a)
    {
        $this->a=$a;

    }

    public function square(){
        return sqrt($this->a);

    }

    public function sin(){
        return sin(deg2rad($this->a));

    }

    public function mod(){
        return abs($this->a);

    }
}
