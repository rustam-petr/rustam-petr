<?php
//header("HTTP/1.0 404 Not found");
header("Location: http://www.onliner.by/");
// тип файла
header("Content-type: application/pdf");

// имя файла
header("Content-Disposition: attachment; filename=two.pdf");

// файл
readfile("one.pdf");
