<?php
include "autoload.php";



//use Rustam\Calc;
//use Zaitsev\Calc;

$calc1 = new Rustam\Calc(2, 3);
echo $calc1->sum();

$calc2 = new Zaitsev\Calc(2, 3);
echo $calc2->sum();
