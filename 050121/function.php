<?php
function maximum ($a, $b)
{
    if ($a > $b) {
        $rez = $a;
    } else {
        $rez = $b;
    }
    return $rez;
}

$a=10;
$b=0;
$c=3;
$d=500;
$e=70;
$f=8;

  echo maximum(maximum(maximum(maximum(maximum($a,$b),$c),$d),$e),$f);


