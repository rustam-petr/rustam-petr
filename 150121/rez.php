<?php
$date = explode('.', file_get_contents('rez.txt'));

// $answer = $_POST["answer"];

$date[$_POST["answer"]]++;
print_r($date);


// $saveDate=$date[0].$date[1].$date[2].$date[3];
file_put_contents('rez.txt', implode('.', $date));

// $fb=fopen("rez.txt", "w+");
// fwrite($fb,$saveDate);
// fclose($fb);
// echo $saveDate;