<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 100;

    if ($a < 100) {
        $x = $a * 2.53;
    } else {
        if (($a >= 100) and ($a<10000)) {
            $x = $a * 2.52;
        } else {
            $x = $a * 2.51;
        }
    }

    echo $x;

    ?>

</body>

</html>