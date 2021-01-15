<?php
$url1=$_POST["url1"];
$url2=$_POST["url2"];

// if (is_file($url1)) {
//   rename ($url1,$url2);
// }
// else echo "это не файл!!!";

unlink($url1); //команда удаляет файл