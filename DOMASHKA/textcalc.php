<?php

$number = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять", "десять","одиннадцать","двенадцать"];

$ee = str_replace(" ", "", $_POST["q1"]); //убираем пробелы во введенном пользователем тексте

$arr = str_split($ee); //превращаем строку в массив

$pozznak = array_search("+", $arr); //ищем положение знака "+" в массиве arr


$p1 = substr($ee, 0, $pozznak); //вырезаем первое слово из строки пользователя начиная с первое позиции,т.е. с числа 0 до позиции знака

$p2 = substr($ee, $pozznak + 1, strlen($ee)); // вырезаем второе слово начиная с позиции следующей за знаком "+" и до конца строки

$q1 = array_search($p1, $number); // в массиве number ищем первое слово которое храниться в переменной р1 и получаем
 //    числовое значение этого слово по порядку следования в массиве
 
$q2 = array_search($p2, $number); //тоже самое что и выше только со вторым словом

$sum = $q1 + $q2; //складываем два числовых значения

echo $ee . " = " . $number[$sum]; //выводим на экран строку введенную пользователем и текстовое значение полученной суммы
