<?php
if (!empty($_POST)) {
    $row = "\n<----->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"];
    file_put_contents("dan.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();
}
?>