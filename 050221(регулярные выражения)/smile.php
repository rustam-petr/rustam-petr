<?php

//$regexp="/((:\))|(:\())/iu";
//echo preg_replace("/:\)/","<img src=""",$matches);
//print_r($matches);

//echo preg_replace(
//    [
//        "/:-?\)/iu",
//        "/:-?\(/iu",
//        "/:P/iu",
//        "/:-\*/iu"
//    ],
//    [
//        '😀',
//        "😞",
//        "😛",
//        "😬"
//    ],
//    $str);
echo $str=$_POST["name"];
$regexp="/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu";
if (preg_match($regexp,$str)) {
    echo "Майл верный";
    } else {
    echo "Майл не верный";
}