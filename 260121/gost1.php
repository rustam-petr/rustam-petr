<?php
if ((!empty($_POST)) && ($_POST["name"] != "") && ($_POST["text"] != "")) {
    $row = "\n<----->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"]."\n".
        date("d F Y H:i:s");
    file_put_contents("dan.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();
}
?>