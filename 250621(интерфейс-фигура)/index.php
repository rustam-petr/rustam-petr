<?php
include "vendor/autoload.php";

$square=new App\Square(3);
//echo $square->name();
//echo $square->per()."<br>";
//echo $square->square();



$rec=new App\Rectangle(5,5);
//echo $rec->name();
//echo $rec->per()."<br>";
//echo $rec->square();

$print=new App\Printer($square);
$print->print();
$print->setFig($rec)->print();

$print->setFig(new App\Triangle(5,4))->print();

$print->setFig(new App\Сircle(4))->print();