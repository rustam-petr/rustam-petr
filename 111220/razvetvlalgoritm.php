<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*$x = -2;
    if ($x > 2) {
        $y = sqrt($x);
    } else {
        $y = $x ** 2;
    }
    echo $y;*/

    $x = 49;

    if ($x > 5) {
        $y = sqrt($x);
    } else {
        if ($x <= 3) {
            $y = $x ** 2;
        } else {
            $y = $x + 5;
        }
    }

    echo $y;
    ?>

</body>

</html>