<?php
$a = $_POST["url"];
$str = file_get_contents($a);
$regexp = "/<div class=\"b-main-page-news-2__main-news-text\">\n?([ ]+)?<p>[\w.,\s-]+<\/p>\n?([ ]+)?<\/div>/iu";
$q = preg_match_all($regexp, $str, $matches);
foreach ($matches[0] as $match) {
    echo $match."<br>";
}
