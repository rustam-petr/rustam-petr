<?php
$a=0;
$arr=[];
$sum=0;
while ($a <3) {
   $b=rand(1,2);
   array_push($arr, $b);
   $c=sqrt($b);
   $sum=$sum+$c;
   $a++;
}
print_r($arr);
echo "<br>";
echo "Сумма квадратных корней элементов массива= ".$sum;