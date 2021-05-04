<?php
$num=file_get_contents("number.txt");
echo preg_replace("/(\d)/","<img src='$0.jpg'>",$num);
file_put_contents("number.txt",($num+1));
