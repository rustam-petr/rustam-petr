<?php
//$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//print_r($a1);
//
//array_walk($a1, function ($item, $key) {
//    echo "$key => $item <br>";
//});
//
//array_walk($a1, function ($item, $key) {
//    echo "$key => $item <br>";
//});
//
//array_walk($a1, function ($item) {
//    echo $item ** 2 . "<br>";
//});
//
//
//$list = ["иванов", "петров", "сидоров"];
//echo "<ol>";
//foreach ($list as $value) {
//    echo "<li>$value</li>";
//}
//echo "</ol>";

//$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//print_r($a1);
//array_walk($a1, function (&$item, $key, $sp) {
//    $item = "$key$sp $item";
//}, "=");
//print_r($a1);


$zarplata = [
    ["Иванов", 50],
    ["Петров", 200],
    ["Сидоров", 20]
];

array_walk($zarplata, function (&$item) {
    if ($item[1] < 100) {
        $item[1] *= 2;
    }
});
print_r($zarplata);

$zarplata = [
    ["Иванов", 50],
    ["Петров", 200],
    ["Сидоров", 20]
];
foreach ($zarplata as &$value) {

    if ($value[1] < 100) {
        $value[1] *= 2;
    }
}
print_r($zarplata);