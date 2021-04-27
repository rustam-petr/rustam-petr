<?php

include "autoload.php";
include "unittest.php";

$tictac=new TicTac();

print_r($tictac->init(2)->putCross(1,1)->getMap());

test($tictac->init(2)->getMap(),[["",""],["",""]]);

test($tictac->init(1)->getMap(),[[""]]);