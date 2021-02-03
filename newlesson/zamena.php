<?php
$str = $_POST["text"];
$pat = "/" . $_POST["zam"] . "/i";
echo $pat;
$pats = "/" . $_POST["qwe"] . "/i";
echo $pats;
$rez=preg_replace($pats, $pat, $str);
echo $rez;