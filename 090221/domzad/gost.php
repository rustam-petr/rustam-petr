<?php
$str = preg_match_all("/\w[ ]\w/iu", $_POST["fio"]);
$str1 = preg_match("/[\w\d\+_]@[\w\d]{4,}\.[\w]{2,}/iu", $_POST["pochta"]);
$str2 = preg_match("/(80|\+375)(25|29|33|44)(\d{7})/iu", $_POST["telefon"]);
$str3 = preg_match("/^(vk)\.(id)\d{8}$/iu", $_POST["adress"]);

$string = preg_replace("/[ ]{1,}/iu", "", ($_POST["pochta"] . $_POST["telefon"]));
$read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("gost.txt"));

$pos = strripos($read, $string);

if ($pos === false) {
    if ($str == 1 && $str1 == 1 && $str2 == 1 && $str3 == 1) {
        echo "Вы успешно прошли регистрацию";
        file_put_contents("gost.txt", ($_POST["fio"] . "\n" . $_POST["pochta"] . "\n" . $_POST["telefon"] . "\n" . $_POST["adress"] . "\n"), FILE_APPEND);
    } else {
        echo "Введите правильные данные";
    }
} else {
    echo "Вы уже регистрировались";
}


