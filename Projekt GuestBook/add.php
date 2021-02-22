<?php
include "smile.php";

if (!qwe($_POST["msg"])) {
    $data = json_decode(file_get_contents("data.json"));
    $data[] = ["msg" => $_POST["msg"], "name" => $_POST["name"], "date/time" => date("d F Y H:i:s")];
    file_put_contents("data.json", json_encode($data));
} else {
    preg_match_all("/.*?(дурак|идиот|редиска|козел).*?/iu", $_POST["msg"], $matches);
    foreach ($matches[1] as $match) {
        file_put_contents("file.txt", $match . "\n", FILE_APPEND);

    }
}

header("Location: main.php");