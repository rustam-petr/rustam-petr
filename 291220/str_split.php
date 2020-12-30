<?php
$a = $_POST["q1"];

$arr = str_split($a);

$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

foreach ($arr as $value) {
    if (is_numeric($value)) {
        echo " " . $number[$value];
    } else {
        echo " " . $value;
    }
}
