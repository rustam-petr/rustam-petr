<?php
// вложенные массивы и выводим элемент
//$arr= array ("wer" => array (6=>5, "a"=>12));
$arr = ["wer" => [6 => 5, "a" => 12]];
echo $arr["wer"]["a"];
echo "<br>";

//выводит два массива и мы видим что они эквивалентны
$arr = [5 => 12, 32, 45, "b" => 66];
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr1 = [5 => 12, 6 => 32, 7 => 45, "b" => 66];
echo "<pre>";
print_r($arr1);
echo "</pre>";

// альтернативная запись если-иначе
echo "<br>";
$a=3;
$b=2;
if ($a == $b) : echo "a=b";
elseif ($a > $b) : echo "a>b";
else : echo "a<b";
endif;
