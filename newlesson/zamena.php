<?php
//$str = $_POST["text"];
//$pat =  $_POST["zam"] ;
//echo $regexp = "/\b" . $_POST["qwe"] . "\b/iu";
//echo $rez;
$pattern = "/\b" . $_POST["qwe"] . "\b/iu";
echo $pattern;

echo $rez = preg_replace($pattern, $_POST["zam"], $_POST["text"]);
