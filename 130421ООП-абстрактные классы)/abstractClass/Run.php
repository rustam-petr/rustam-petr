<?php

include_once "Auto.php";
include_once "Mercedes.php";
include_once "Lada.php";

$car = new Mercedes();
$car->setBakG(20);
echo $car->Drive();
echo $car->Drive();
echo $car->Drive();

echo "<br>";

$car2 = new Lada();
$car2->setBakL(20);
echo $car2->Drive();