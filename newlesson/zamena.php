<?php
$str = $_POST["text"];
$pat =  $_POST["zam"] ;
$regexp = "/" . $_POST["qwe"] . "/i";
$rez=preg_replace($regexp, $pat, $str);
echo $rez;