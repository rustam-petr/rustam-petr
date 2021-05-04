<?php
$string=file_get_contents('https://www.onliner.by');
echo strip_tags($string);