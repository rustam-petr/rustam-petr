<?php
$fileName="schet.txt";
$fb=fopen($fileName, "r");
$counter=fread($fb, filesize ($fileName));
fclose($fb);
echo ++$counter;
$fb=fopen($fileName, "w+");
fwrite($fb,$counter);
fclose($fb);