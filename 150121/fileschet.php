<?php
$handle=fopen("https://ru.wikipedia.org/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F","r");
$cont="";
while (!feof($handle)) {
    $cont.=fread($handle,1);
  }
  fclose($handle);
  echo $cont;