<?php
$random = $_POST["q"];
echo "Число, которое вы вводили   " . $random . "<br>";

$chars = preg_split('//', $random, -1, PREG_SPLIT_NO_EMPTY);

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
echo "Результат   :";
for ($i = 0; $i < count($chars); $i++) {
    $a = preg_replace("/" . $chars[$i] . "/", $arr[$chars[$i]], $chars[$i]);
    echo " " . $a . " ";
}

