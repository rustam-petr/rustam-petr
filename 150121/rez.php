<?php
$date = file("rez.txt");

$answer = $_POST["answer"];

$date[$answer]=($date[$answer]+1)."\n";

$saveDate=$date[0].$date[1].$date[2].$date[3];

$fb=fopen("rez.txt", "w+");
fwrite($fb,$saveDate);
fclose($fb);
echo $saveDate;