<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
sort($dir);
foreach ($dir as $value) {
    if (preg_match("/.*\.dll/iu", $value)) {
        $result = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-dll.png'>" . "$1", $value);
    } else {
        if (preg_match("/.*\.docx/iu", $value)) {
            $result = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-doc.png'>" . "$1", $value);
        } else {
            if (preg_match("/.*\.pdf/iu", $value)) {
                $result = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-pdf.png'>" . "$1", $value);
            } else {
                $result = preg_replace("/(.*)\.[a-z]+/iu", "<img src='image-other.png'>" . "$1", $value);
            }
        }
    }
    echo "<a href='files\\$value'>$result</a><br>";
}

