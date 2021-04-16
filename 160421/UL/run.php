<?php
include "TList.php";
include_once "Ul.php";
include_once "Ol.php";


$ul = new Ul();
$ul->setData(["Иванов", "Петров", "Сидоров"]);
$ul->setType("square");
echo $ul->html();
$ul->setType("circle");
echo $ul->html();

$ol = new Ol();
$ol->setData(["Иванов", "Петров", "Сидоров"]);
$ol->setType("1");
echo $ol->html();
$ol->setType("A");
echo $ol->html();