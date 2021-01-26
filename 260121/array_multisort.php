<?php
$arr1=[3,6,1,0];
$arr2=["три","шесть","один","ноль"];
array_multisort($arr1,$arr2);
print_r($arr1);
print_r($arr2);