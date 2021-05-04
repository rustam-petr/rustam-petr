<?php
$fb=fopen("file.txt", "r");
$str=fread($fb,filesize("file.txt"));
echo $str;
fclose($fb);
