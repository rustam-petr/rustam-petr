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
        <p class="ww">какую марку машины вы предпочитаете?</p>
        <form action="rez.php" method="post">
            <input type="radio" name="answer" value="0">Хонда<br>
            <input type="radio" name="answer" value="1">Тойота<br>
            <input type="radio" name="answer" value="2">Мерседес<br>
            <input type="radio" name="answer" value="3">Ауди<br>
            <input type="radio" name="answer" value="4">БМВ<br>
            <input type="submit" value="Кнопка ПУСК!!!">

        </form>
        <!-- <?php
        $date = explode('.', file_get_contents('rez.txt'));
        $date[$_POST["answer"]]++;
        file_put_contents('rez.txt', implode('.', $date));
        echo '<p class="ku"> Общее количество' . array_sum($date) . '</p>';
        ?> -->
    </div>

</body>

</html>