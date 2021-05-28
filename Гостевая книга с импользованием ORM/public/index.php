<?php

use W1020\CRUD;

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];

$crud = new CRUD($config);

$crud->setTableName('gb');
if (!empty($_POST)) {
    $crud->ins($_POST);
    header("Location: ?");
}

if (isset($_GET["id"])) {
    $crud->del($_GET["id"]);
    header("Location: ?");
}


$table = $crud->get();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col mt-5 text-center">
            <table class="table table-success table-striped">
                <?php
                $headers = "";
                echo "$headers<th>Переписка</th><th>Имя</th><th></th>";
                foreach ($table as $value) {
                    echo "<tr><td>$value[message]</td><td>$value[name]</td><td><a class='btn btn-danger' href='index.php?id= $value[id]'>Удалить</a></td></tr>";
                }
                ?>
            </table>

            <form action="?" method="post">
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here"
                              id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Введите сообщение</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" placeholder="Leave a comment here"
                           id="floatingTextarea">
                    <label for="floatingTextarea">Введите имя</label>
                </div>
                <br><br>
                <input type="submit" class="btn btn-primary" value="Подтвердить">
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>