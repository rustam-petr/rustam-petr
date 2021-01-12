<?php
function Test()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo Test();
echo Test();
echo Test();

echo "<br>"; //-------------------------------

function plus(&$qwe)
{
    $qwe .= "Hello";
}
$str = "world";
plus($str);
echo $str;

echo "<br>";//--------------------------------

function takes_array ($input) {

 echo "$input[0]+$input[1]=", $input[0]+$input[1];
}
$input=[4,5];
takes_array($input);

echo "<br>";//--------------------------------

function sum_array($arr) {
    $sum=0;
   foreach ($arr as $value) { 
              $sum+=$value;
    }
    return $sum;
} 
$arr=[1,2,3,9];
echo sum_array($arr);

echo "<br>"; //-------------------------------

function array_product1 ($arr) {
    $sum=1;
   foreach ($arr as $value) { 
              $sum*=$value;
    }
    return $sum;
} 
$arr=[1,2,3,4,5,6,999];
echo array_product1($arr);

echo "<br>"; //-------------------------------

function array_name ($ar) {
    echo "<ul>";
      foreach ($ar as $value) { 
           echo "<li>$value</li>";
    }
    echo "</ul>";

} 
$arr=["Иванов","Петров","Сидоров"];
echo array_name($arr);