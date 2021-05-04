<?php
$str="helbuDa drink vis Bab";
$char=preg_split('/d|b/i',$str);
print_r($char);
