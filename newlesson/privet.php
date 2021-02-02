<?php
$str = $_POST["name"];
$pat = "/Привет/i";
$rez = preg_match_all($pat, $str);
echo $rez;


