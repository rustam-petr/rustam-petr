<?php
$arr = [5, 7, 3, 8, 9, 10];

$b = 0;

for ($i = 0; $i <= count($arr); $i++) {
    $b = $b + $arr[$i];
}

echo $b . "<br>";

$a = 0;

foreach ($arr as $value) {
    $a = $a + $value;
}

echo $a . "<br>";
