<?php
$str = preg_match_all("/\w[ ]\w/iu", trim($_POST["fio"]));
$str1 = preg_match("/[\w\d\+_]@[\w\d]{4,}\.[\w]{2,}/iu", trim($_POST["pochta"]));
$telefon=preg_replace("/[-()]/","",$_POST["telefon"]);
$str2 = preg_match("/(80|\+375)(25|29|33|44)(\d{7})/iu", $telefon);
$str3 = preg_match("/^(vk)\.(id)\d{8}$/iu", $_POST["adress"]);

$string = preg_replace("/[ ]{1,}/iu", "", $_POST["pochta"]);
$string1 = preg_replace("/[ ]{1,}/iu", "", $_POST["telefon"]);
$read = preg_replace("/[ \n]{1,}/iu", "", file_get_contents("gost.txt"));

$pos = strripos($read, $string);
$pos1 = strripos($read, $string1);

if ($pos === false && $pos1 === false) {
    if ($str == 1 && $str1 == 1 && $str2 == 1 && $str3 == 1) {
        echo "Вы успешно прошли регистрацию";
        file_put_contents("gost.txt",( trim($_POST["fio"]) . "\n" . trim($_POST["pochta"]) . "\n" . $telefon . "\n" . $_POST["adress"] . "\n"), FILE_APPEND);
    } else {
        echo "Введите правильные данные";
    }
} else {
    echo "Вы уже регистрировались";
}


