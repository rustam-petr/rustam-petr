<?php
// echo htmlspecialchars(file_get_contents("https://www.onliner.by"));
$text ='
<p>Параграф</p>
<!--Comment--->
ещё <b>немного</b>текста';
echo strip_tags($text);
echo "\n\n-------\n";
echo strip_tags($text,'<p><b>');
