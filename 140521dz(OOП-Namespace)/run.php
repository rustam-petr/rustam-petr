<?php
include "autoload.php";

$calc2 = new DiffAndDiv\Calc2(2, 3);
echo $calc2->diff()."<br>";
echo $calc2->div()."<br>";


$calc1= new SumAndMult\Calc1(2, 3);
echo $calc1->sum()."<br>";
echo $calc1->mult()."<br>";