<?php
$str = file_get_contents($_POST["url"]);
$regexp = "/<div class=\"b-main-page-news-2__main-news-text\">\n?([ ]+)?<p>[\w.,\s-]+<\/p>\n?([ ]+)?<\/div>/iu";
preg_match_all($regexp, $str, $matches);
foreach ($matches[0] as $match) {
    echo $match . "<br>";
}
