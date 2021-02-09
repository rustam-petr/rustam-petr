<?php
$str=file_get_contents("https://www.nytimes.com");
$regexp="/\bcovid(.*?)\b/iu";
echo "количество совпадений --- ".preg_match_all($regexp,$str);