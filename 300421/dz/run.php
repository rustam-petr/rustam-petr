<?php
include "autoload.php";

$list = new TList();
echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setNum('a')->html();
echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setNum('1')->html();
echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setNum('I')->html();
echo $list->setData(['Иванов', 'Петров', 'Сидоров'])->setTagName("ol")->setNum('i')->html();
