<?php
$str = file_get_contents("voina-i-mir_1.txt");
$regexp = "/\b(судар)(.*?)\b/iu";
echo "Количество совпадений слов --- ". preg_match_all($regexp, $str, $matches)."<br>";
print_r($matches);
foreach ($matches[0] as $match) {
    echo $match."<br>";
}