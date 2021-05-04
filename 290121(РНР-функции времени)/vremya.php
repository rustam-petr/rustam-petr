<?php
$date = explode("-", $_POST["qwe"]);
// $year = $date[0];
// $month = $date[1];
// $day = $date[2];
// $second = time() - mktime(0, 0, 0, $month, $day, $year);
echo floor((time() - mktime(0, 0, 0, $date[1], $date[2], $date[0])) / (60 * 60 * 24))." полных суток";
// echo $days . " полных суток";
