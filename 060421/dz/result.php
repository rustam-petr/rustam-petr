<?php
include_once "function.php";

$result=new Operation($_POST["a"]);

echo $result->{$_POST["op"]}();