<?php
session_start();
$_SESSION["username"]="Rustam";
echo "Hello".$_SESSION["username"]."<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="ses2.php">Перейти на страницу 2?</a>
</body>
</html>




