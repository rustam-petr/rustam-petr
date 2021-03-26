<?php
$link = mysqli_connect("localhost", "root", "root", "GuestBook");
if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`name`, `meropriyatie`,`comment`,`phone`)" .
        "VALUES ('$_POST[name]','$_POST[meropriyatie]','$_POST[comment]','$_POST[phone]')";
    mysqli_query($link, $sql);
}
header("Location: qwerty.php");