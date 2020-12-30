<?php
$a = $_POST["q1"];
$q = str_split($a);
 print_r($q);
$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
echo "<br>";
foreach ($q as $value) {
   
        echo $number[$value];
    
    }

