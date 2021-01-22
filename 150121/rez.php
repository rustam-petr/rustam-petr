<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="ss">
        <?php
        $date = explode('.', file_get_contents('rez.txt'));
        $date[$_POST["answer"]]++;
        file_put_contents('rez.txt', implode('.', $date));

        echo '<h1> Результат голосования </h1>';
        ?>
        <table class="qwe">
            <tr>
                <td>
                    <?php
                    echo '<p> Хонда --- '. round($date[0] * 100 / array_sum($date), 2) . '%</p>';
                    echo '<p> Тойота --- ' . round($date[1] * 100 / array_sum($date), 2) . '%</p>';
                    echo '<p> Мерседес --- ' . round($date[2] * 100 / array_sum($date), 2) . '%</p>';
                    echo '<p> Ауди --- ' . round($date[3] * 100 / array_sum($date), 2) . '%</p>';
                    echo '<p> БМВ --- ' . round($date[4] * 100 / array_sum($date), 2) . '%</p>';
                    ?>
                </td>
            </tr>
        </table>
    </div>


</body>

</html>