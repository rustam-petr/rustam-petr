<!--<!DOCTYPE html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!--<form action="?" method="post">-->
<!--    Введите любое число.-->
<!--<input type="text" name="q">-->
<!--<input type="submit" value="ok">-->
<!--</form>-->
<?php
$random = $_POST["q"];
echo"Число, которое вы вводили   ".  $random . "<br>";

$chars = preg_split('//', $random, -1, PREG_SPLIT_NO_EMPTY);

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

for ($i=0; $i <count($chars) ; $i++) {
    $a= preg_replace("/". $chars[$i]."/",$arr[$chars[$i]],$chars[$i]);
    echo  $a." ";
}

