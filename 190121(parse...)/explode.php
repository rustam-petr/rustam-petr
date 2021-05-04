<?php
$arr = explode(':', file_get_contents('file1.txt'));
$arr[3]++;
print_r($arr);
file_put_contents('file1.txt', implode(':', $arr));
