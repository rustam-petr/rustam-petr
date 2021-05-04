<?php
$qwe=$_POST["q1"];
$zxc=$_POST["q2"];

function zerno($a, $b)
{
     $n = $a * $b;
     for ($i = 0; $i < $n; $i++) {
        $sum=$sum+(2**$i);
          }
    return $sum;
}
echo zerno($qwe,$zxc)/1e6."   тонн зерна";
