<?php
$str="Всем <b><h1>Привет</h1></b>!!!";
$pat="/<b><h1>.*<\/h1><\/b>/i";
$ret="<i>$0</i>";
$str1=preg_replace($pat,$ret,$str);
echo $str1;