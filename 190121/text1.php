<?php
$w= file_get_contents ("text.txt");
echo ++$w;
file_put_contents("text.txt",$w);