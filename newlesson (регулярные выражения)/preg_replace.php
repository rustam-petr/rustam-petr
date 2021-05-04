<?php
$str="Всем <b>Привет</b>!!!";
$pat="/<b>.*<\/b>/i";
$ret="<i>$0</i>";
$str1=preg_replace($pat,$ret,$str);
echo $str1;

