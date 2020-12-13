<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "$i";
        echo "<br\n>";
    }
    ?>
    <br>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo "$i";
        echo "<br\n>";
        $i++;
    }
    ?>
    <br>
    <?php
    $i = 1;
    do {
        echo "$i";
        echo "<br\n>";
        $i++;
    } while ($i <= 10);
    ?>
    <br>
    "Спасибо за внимание!"

</body>

</html>