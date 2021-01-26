<?php
// сортировка массива методом пузырька
function puz($array)
{
    for ($n = count($array) - 1; $n > 0; $n--) {
        for ($i = 0; $i <= $n; $i++) {
            if ($array[$i] < $array[$i + 1]) {
                $buff = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $buff;
            }
        }
    }
    return $array;
}

// $arr = [4, 6, 9, 3, 1, 7, 0];
$arr=["f","e","b","x","a"];
print_r($arr);

$arr2=puz($arr);
print_r($arr2);
