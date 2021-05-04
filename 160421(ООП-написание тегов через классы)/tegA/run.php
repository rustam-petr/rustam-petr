<?php
include "A.php";

$a = new A();
$a->setHref("https://www.tut.by/");
$a->setInnerText('тут.бай');
echo $a->html();
