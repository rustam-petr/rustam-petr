<?php
include "gost1.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Косячок</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $data = file_get_contents("dan.txt");
    $records = explode("<----->", $data);
    ?>
    <div class="otzyv">
        <?php
    echo "<table border='1'>";
    foreach ($records as $record) {
        $row = explode("\n", trim($record));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
    }
    echo "</table>";
    ?>
    </div>
    <br>
    <div class="menu">
    <form action="?" method="POST">
        Введите Ваше имя. <br>
        <input type="text" name="name"> <br>
        Введите Ваш адрес электронной почты.<br>
        <input type="text" name="email"><br>
        Введите информацию.<br>
        <textarea rows="20" cols="30" name="text"></textarea><br><br>
        <input type="submit" value="Оставить отзыв">
    </form>
    </div>
</body>

</html>