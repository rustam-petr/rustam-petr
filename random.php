<?php

$a = 0;

$b = 0;

$arr = [];


while ($a < $i = mt_rand(12, 20)) {

    if ($i !== 15) {

        array_push($arr, $i);

        $b = $b + 1;
    } else {
        break;
    }
}

print_r($arr);
echo "<br>";
echo "Выполнено операций цикла " . $b;
