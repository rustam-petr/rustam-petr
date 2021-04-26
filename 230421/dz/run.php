<?php
include_once "autoload_Class.php";

$ol = new Ol();
echo $ol->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("1")
    ->html();

$ul = new Ul();
echo $ul->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("square")
    ->html();

$table = new Table();
echo $table
    ->setHeaders(['Имя', 'Зарплата', 'Должность'])
    ->setData([
        ['Ваня', '500р', 'Сварщик'],
        ['Петя', '150р', 'Тракторист'],
        ['Ольга', '700р', 'Бухгалтер']
    ])
    ->html();