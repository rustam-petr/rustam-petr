<?php
$headers=get_headers($_POST["url"],1);
//print_r($headers);
//echo $headers["Content-Type"];
header('Content-Type: '.$headers['Content-Type']);
echo file_get_contents($_POST["url"]);