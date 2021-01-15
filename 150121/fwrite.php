<?php
$fb=fopen("file.txt", "w+");
fwrite($fb,"Text");
fclose($fb);