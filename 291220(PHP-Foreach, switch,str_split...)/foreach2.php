<?php

$a = $_POST["q1"];

$numbers = [
    "ноль" => "zero",
    "один" => "one",
    "два" => "two",
    "три" => "three",
    "четыре" => "fore"
];

if (isset($numbers[$a])) {
    echo $numbers[$a];
} else {
    echo "нет такого слова";
}

