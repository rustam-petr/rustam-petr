<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>
<body>
<?php
$date = explode("/", "23/07/2021");
$olimpiada = mktime(0, 0, 0, $date[1], $date[0], $date[2]) - time();
$ostatok = floor($olimpiada / (60 * 60 * 24));
$hour = floor(($olimpiada % (60 * 60 * 24)) / (60 * 60));
$minute = floor(($olimpiada % (60 * 60)) / 60);
$second = $olimpiada % 60;
echo "До олимпиады осталось $ostatok дней $hour часов $minute минут $second секунд";
?>
</body>
</html>



