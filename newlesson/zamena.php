<?php
//$str = $_POST["text"];
//$pat =  $_POST["zam"] ;
//echo $regexp = "/\b" . $_POST["qwe"] . "\b/iu";
//echo $rez;

echo $rez = preg_replace("!\b" . $_POST["qwe"] . "\b!iu", $_POST["zam"], $_POST["text"]);
