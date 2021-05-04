<?php
$array = ["one", 2, "3", 4, "five"];
$array2 = [8, 12];

echo count($array) . "<br>"; // 5

echo array_sum($array) . "<br>"; // 9

print_r(array_merge($array, $array2)); // Array ( [0] => one [1] => 2 [2] => 3 [3] => 4 [4] => five [5] => 8 [6] => 12 )
echo "<br>";

echo array_product($array) . "<br>"; // 0

print_r(array_reverse($array)); // Array ( [0] => five [1] => 4 [2] => 3 [3] => 2 [4] => one )
echo "<br>";

echo array_search("five", $array) . "<br>"; // 4

$array2 = ["one", 2, "3", 4, "five"];

if (in_array("3", $array2)) {
    echo "Find string 3"; // Find string 3
}