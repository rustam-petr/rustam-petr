<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

function zarplata($n, $m, $array)
{
    $table = '<table>';
    $table .='<caption>Зарплатная ведомость</caption>';


    for ($i = 0; $i < $n; $i++) {

        $table .= "<tr>";

        for ($j = 0; $j < $m; $j++) {

            $table .= "<td>" . $array[$i][$j] . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";

    return $table;
}
?>
</body>
</html>

