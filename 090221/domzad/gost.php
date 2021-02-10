<?php
$str=$_POST["fio"];
$regexp="/[a-zа-яё][ ]{1,}[a-zа-яё]/iu";
$q=preg_match_all($regexp,$str);
$str1=$_POST["pochta"];
$regexp1="/[a-zа-яё\d\+_]@[a-zа-яё\d]{4,}\.[a-zа-яё]{2,}/iu";
$q1=preg_match_all($regexp1,$str1);
$str2=$_POST["telefon"];
$regexp2="/^(\+375)((29)?|(33)?|(44)?)(\d{7})$/iu";
$q2=preg_match_all($regexp2,$str2);
$str3=$_POST["adress"];
$regexp3="/^(vk)\.(id)\d{8}$/iu";
$q3=preg_match_all($regexp3,$str3);

$qwe=$str.$str1.$str2.$str3; // формируем строку из введенных значений
$qwe1=preg_replace("/[ ]{1,}/iu","",$qwe); // убираем все пробелы


$read=file_get_contents("gost.txt");
$arr=preg_replace("/[ \n]{1,}/iu","",$read);

$pos=strripos($arr,$qwe1);

if ($pos===false) {

    if ((($q == $q1) == $q2) == $q3) {
        echo "Вы успешно прошли регистрацию";
        file_put_contents("gost.txt", ($str . "\n" . $str1 . "\n" . $str2 . "\n" . $str3 . "\n"),FILE_APPEND);
    } else {
        echo "Введите правильные данные";
    }
} else {
    echo "Вы уже регистрировались";
}


