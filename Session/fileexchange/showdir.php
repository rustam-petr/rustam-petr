<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
sort($dir);
//$value=preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-dll.png'>"."$1",$dir[0]);
//print_r($dir);"<br>";
foreach ($dir as $value) {
    if (preg_match("/.*\.dll/iu",$value)){
        $qwe=preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-dll.png'>"."$1",$value);
    }
    if (preg_match("/.*\.docx/iu",$value)){
        $qwe=preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-doc.png'>"."$1",$value);
    }
    if (preg_match("/.*\.pdf/iu",$value)){
        $qwe=preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-pdf.png'>"."$1",$value);
    }
//    if (preg_match("/.*\.\w{3,}[^dll][^pdf][^docx]/iu",$value)){
//        $qwe=preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-other.png'>"."$1",$value);
//    }
    echo "<a href='files\\$value'>$qwe</a><br>";
}
