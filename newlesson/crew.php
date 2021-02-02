<?php
$str = $_POST["name"];
$pat="/<b>(.*?)<\/b>/i";
$ret="<i>$1</i>";
$str1=preg_replace($pat,$ret,$str);
echo $str1;