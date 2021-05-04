<?php
include "autoload.php";

$list = new TList(['Иванов', 'Петров', 'Сидоров'], "circle", "ul");

echo $list->html();

echo $list->setData(['Пупкин', 'Гагарин', 'Гастелло'])->html();

echo $list->setType("disc")->html();

//$list2 = new TList(['Пупкин', 'Гагарин', 'Гастелло'], "circle", "ul");
//
//echo $list2->html();

//echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setType('a')->html();
//echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setType('1')->html();
//echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setType('I')->html();
//echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setType('i')->html();


