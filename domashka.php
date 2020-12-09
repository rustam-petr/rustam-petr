<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 2;
    $x = 2;
    $y = ($a*$x+2*$b*$x**2)*abs(cos($x**2))/pi()*exp($x);
    echo $y;
    echo "<br\n>";
    $a = 7;
    $b = 5;
    $x = 1;
    $y = pow($a * log($b * $x), 1 / 3) / (1 + pow(sin($a * $x), 2));
    echo $y;
    echo "<br\n>";
    $a = 1;
    $b = 2;
    $c = 3;
    $x = 4;
    $y = abs(sin($x ** 3) + $a) * exp($a) / pow(($b ** 2 + $c ** 2), 1 / 3);
    echo $y;
    ?>
</body>

</html>