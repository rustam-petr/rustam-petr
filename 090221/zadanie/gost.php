<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
<div class="form">
    <?php
//    проверка правильности имени и фамилии
    $condition1 = preg_match(
        "/^[a-zа-я]+ [a-zа-я]+$/iu",
        trim($_POST["fio"])
    );
 //  проверка правильности почты
    $condition2 = preg_match(
        "/[\w\d\+_]+@[\w\d]{4,}\.[\w]{2,}/iu",
        trim($_POST["pochta"])
    );
// проверка правильности телефона
    $condition3 = preg_match(
        "/(80|\+375)(25|29|33|44)(\d{7})/iu",
        preg_replace(
            "/[^0-9\+]/",
            "",
            trim($_POST["telefon"])
        )
    );
// проверка правильности адреса соц сети
    $condition4 = preg_match(
        "/^(https:\/\/|)(vk\.com\/)id\d+$/iu",
        trim($_POST["adress"])
    );


    $read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("gost.txt"));

    $pos = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["fio"]));
    $pos1 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["pochta"]));
    $pos2 = strripos($read, preg_replace("/[ -()]{1,}/iu", "", $_POST["telefon"]));
    $pos3 = strripos($read, preg_replace("/[ ]{1,}/iu", "", $_POST["adress"]));

    if ($pos === false && $pos1 === false && $pos2 === false && $pos3 === false) {
        if ($condition1 && $condition2 && $condition3 && $condition4) {
            echo "<h1>Вы успешно прошли регистрацию</h1>";
            file_put_contents("gost.txt", (trim($_POST["fio"]) . "\n" . trim($_POST["pochta"]) . "\n" . trim($_POST["telefon"]) . "\n" . trim($_POST["adress"]) . "\n"), FILE_APPEND);
        } else {
            echo "<h1>Введите правильные данные</h1>";
        }
    } else {
        echo "<h1>Вы уже регистрировались</h1>";
    } ?>
</div>
<video class="video" src="videobg.mp4" autoplay muted loop></video>
</body>

</html>