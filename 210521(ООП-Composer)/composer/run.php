<?php
require __DIR__ . '/vendor/autoload.php';

$calc = new Rustam\Calc(7, 35);
echo $calc->sum();

// либо так можно писать
//require __DIR__ . '/vendor/autoload.php';
//
//use Hanna\Calc;
//
//$calc = new Calc(2, 3);
//echo $calc->sum();