<?php
$str="Привет сегодня самый лучший день!";
$newStr=wordwrap($str,10,'<br>\n',1);
echo $newStr.'<br>';
