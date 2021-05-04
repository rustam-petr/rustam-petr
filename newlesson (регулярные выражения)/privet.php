<?php
//$str = $_POST["name"];
//$pat = "/" . $_POST["slo"] . "/i";
//echo "Количество совпадений - " . $rez;

echo "Количество совпадений - " . $rez = preg_match_all("/\b" . $_POST["slo"] . "\b/iu", $_POST["name"]);



