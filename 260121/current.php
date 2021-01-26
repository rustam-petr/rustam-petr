<?php
$arr = ["one", "two","three"];
echo current($arr)."<br>"; //one
next($arr);
echo current($arr)."<br>"; //two
reset($arr);
echo current($arr)."<br>"; //one
end($arr);
echo current($arr)."<br>"; //three