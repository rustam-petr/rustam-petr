<?php
include 'autoload.php';


$calc = new NewCalc1( 180,90);

echo $calc->sum();

echo "<br>";

echo $calc->mult();

echo "<br>";

echo $calc->div();

echo "<br>";

echo $calc->diff();

echo "<br>";

echo $calc->sin();
echo "<br>";
echo $calc->sin1();