<?php

include "autoload.php";
include "unittest.php";

$tictac = new TicTac();

$tictac
    ->init(3)
    ->putCross(1, 1)
    ->getMap();

//print_r($tictac->init(2)->putCross(1,1)->getMap());

//test($tictac->init(2)->getMap(),[["",""],["",""]]);
//
//test($tictac->init(1)->getMap(),[[""]]);

$map = new Map();

echo $map
    ->setMap($tictac->getMap())
    ->getHtmlTable();

