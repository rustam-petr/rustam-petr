<?php
// $e = $_POST["q1"];

$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять", "десять"];
$ee = str_replace(" ", "", $_POST["q1"]);

$arr = str_split($ee);

$pozznak = array_search("+", $arr);


$p1 = substr($ee, 0, $pozznak);
$p2 = substr($ee, $pozznak + 1, strlen($ee) - $pozznak);

$q1 = array_search($p1, $number);
$q2 = array_search($p2, $number);

$sum = $q1 + $q2;

echo $ee . " = " . $number[$sum];
