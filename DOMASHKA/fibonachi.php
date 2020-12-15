<?php
$n = $_POST["chislo1"];
echo "с использованием цикла for <br\n> ";
echo ($x = 0) . "<br>".($y = 1) . "<br>";

for ($i = 0; $i < $n; $i++) {
    $z = $x + $y;
    echo $z . "<br>";
    $x = $y;
    $y = $z;
}
echo "с использованием цикла while <br\n> ";
echo ($x = 0) . "<br>";
echo ($y = 1) . "<br>";
$i = 0;
while ($i < $n) {
    $z = $x + $y;
    echo $z . "<br>";
    $x = $y;
    $y = $z;
    $i++;
}
echo "с использованием цикла do-while <br\n> ";
echo ($x = 0) . "<br>";
echo ($y = 1) . "<br>";
$i = 0;
 do {
    $z = $x + $y;
    echo $z . "<br>";
    $x = $y;
    $y = $z;
    $i++;
} while ($i < $n);