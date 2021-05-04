<?php
$val1 = $_POST["val1"];
$dollars=$val1/2.60;
$euro=$val1/3.15;
$rub=$val1/0.0314;
echo "Dollars:    ". round($dollars,2)."<br\n>" ;
echo "Euro:    ".round($euro,2)."<br\n>";
echo "Rub:    ".round($rub,2)."<br\n>" ;
