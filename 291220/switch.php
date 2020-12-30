<?php

$number = $_POST["q1"];

switch ($number) {
    case "0":
        $str = 'zero';
        break;

    case "1":
        $str = 'one';
        break;

    case "2":
        $str = 'two';
        break;

    case "3":
        $str = 'three';
        break;

    case "4":
        $str = 'fore';
        break;

    case "5":
        $str = 'five';
        break;

    default:
        $str = "нет такого числа";
        break;
}

echo $str;