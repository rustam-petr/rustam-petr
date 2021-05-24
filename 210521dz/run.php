<?php
require __DIR__ . '/vendor/autoload.php';

use Action\Calc;

$calc=new Calc(5,7);

echo $calc->sum()."<br>";
echo $calc->mult()."<br>";
echo $calc->diff()."<br>";
echo $calc->div()."<br>";
