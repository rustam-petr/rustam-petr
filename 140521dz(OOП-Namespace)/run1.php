<?php
include 'autoload.php';

use DiffAndDiv\Calc2 as Calc2;
use SumAndMult\Calc1 as Calc1;

$calc1 = new Calc1(2, 3);
echo $calc1->sum()."<br>";
echo $calc1->mult()."<br>";

$calc2 = new Calc2(2, 3);
echo $calc2->diff()."<br>";
echo $calc2->div()."<br>";