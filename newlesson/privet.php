<?php
//$str = $_POST["name"];
//$pat = "/" . $_POST["slo"] . "/i";
echo "Количество совпадений - " . $rez = preg_match_all("/" . $_POST["slo"] . "/iu", $_POST["name"]);
//echo "Количество совпадений - " . $rez;


