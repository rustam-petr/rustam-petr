<?php
$s=file_get_contents("https://www.php.net/manual/ru/indexes.functions.php");
echo substr_count($s, '<href="function');
