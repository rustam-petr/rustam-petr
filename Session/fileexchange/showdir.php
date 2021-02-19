<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
sort($dir);
foreach ($dir as $value) {
    if (preg_match("/.*\.dll/iu", $value)) {
        $rezult = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-dll.png'>" . "$1", $value);
    } else {
        if (preg_match("/.*\.docx/iu", $value)) {
            $rezult = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-doc.png'>" . "$1", $value);
        } else {
            if (preg_match("/.*\.pdf/iu", $value)) {
                $rezult = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-pdf.png'>" . "$1", $value);
            } else {
                $rezult = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-other.png'>" . "$1", $value);
            }
        }
    }
    echo "<a href='files\\$value'>$rezult</a><br>";
}

