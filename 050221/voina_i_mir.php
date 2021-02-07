<?php
$str = file_get_contents("voina-i-mir_1.txt");
$regexp = "/\bсудар(.*?)\b/iu";
echo "Количество совпадений слов --- ". preg_match_all($regexp, $str, $matches)."<br>";
foreach ($matches[0] as $match) {
    echo $match."<br>";
}