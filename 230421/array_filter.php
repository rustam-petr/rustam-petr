<?php
$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);

// 1 способ
$a2 = array_filter($a1, function ($x){return $x>=0;});
print_r($a2);

// 2 способ
$a2 = array_filter($a1, fn($x) => $x >= 0);
print_r($a2);
