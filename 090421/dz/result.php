<?php
include_once "class/Figure.php";
include_once "class/Cube.php";
include_once "class/Okr.php";
include_once "class/Trap.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <p class="h2"> Результат выполнения.</p>
            <br>
            <p class="h2"> <?php

                switch ($_GET["form"]) {
                    case "cube":
                        $result = new Cube ($_POST["a"]);
                        echo $result->{$_POST["op"]}();
                        break;

                    case "trap":
                        $result = new Trap ($_POST["a"], $_POST["b"]);
                        echo $result->{$_POST["op"]}();
                        break;

                    case "okr":
                        $result = new Okr ($_POST["a"]);
                        echo $result->{$_POST["op"]}();
                        break;
                }
                ?></p>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>
