<?php
include 'autoload.php';

use Rustam\Calc as CalcL;
use Zaitsev\Calc as CalcH;

$calc1 = new CalcL(2, 3);
echo $calc1->sum();

$calc2 = new CalcH(2, 3);
echo $calc2->sum();