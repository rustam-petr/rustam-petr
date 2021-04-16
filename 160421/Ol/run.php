<?php
include_once "Ol.php";

$ol = new Ol();
$ol->setData(["Иванов", "Петров", "Сидоров"]);
$ol->setType("1");
echo $ol->html();
$ol->setType("A");
echo $ol->html();