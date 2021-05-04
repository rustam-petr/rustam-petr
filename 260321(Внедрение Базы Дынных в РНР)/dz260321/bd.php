<?php
$link = mysqli_connect("localhost", "root", "root", "service");
if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`city`, `email`,`pol`,`age`)" .
        "VALUES ('$_POST[city]','$_POST[email]','$_POST[pol]','$_POST[age]')";
    mysqli_query($link, $sql);
}
header("Location: comment.php");