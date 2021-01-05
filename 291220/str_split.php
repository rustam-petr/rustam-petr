<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = $_POST["q1"];

$arr = mb_str_split($a);

$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

foreach ($arr as $value) {
    if (is_numeric($value)) {
        echo " " . $number[$value];
    } else {
        echo " " . $value;
    }
}
?> 
</body>
</html>