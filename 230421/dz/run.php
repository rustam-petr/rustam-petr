<?php
include_once "Ol_Array_map.php";

$ol = new Ol_Array_map();
$ol->setData(["Иванов", "Петров", "Сидоров"]);
$ol->setType("1");
echo $ol->html();
//$ol->setType("A");
//echo $ol->html();