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
<?php
switch ($_POST["ch"]) {
    case "cube":?>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="result.php" method="post">
                <div class="mb-3">
                    <h3> Введите значение стороны куба. </h3>
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите число"
                           name="a">
                    <input type="hidden" name="form" value="1">
                    <br>
                </div>
                <select class="form-select" aria-label="Default select example" name="op">
                    <option selected>Выберите операцию</option>
                    <option value="square">площадь</option>
                    <option value="per">периметр</option>

                </select>
                <br><br>
                <input type="submit"  class="btn btn-info" value="Вычислить">

            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
       <?php break;
    case "trap":?>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="result.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите нижнее основание"
                           name="a"> <br>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите верхнее основание"
                           name="b">
                    <input type="hidden" name="form" value="2">
                    <br>
                </div>
                <select class="form-select" aria-label="Default select example" name="op">
                    <option selected>Выберите операцию</option>
                    <option value="square">площадь</option>
                    <option value="per">периметр</option>

                </select>
                <br><br>
                <input type="submit"  class="btn btn-info" value="Вычислить">

            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
        <?php break;
    case "okr":?>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="result.php" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите радиус"
                           name="a"> <br>
                    <input type="hidden" name="form" value="3">
                    <br>
                </div>
                <select class="form-select" aria-label="Default select example" name="op">
                    <option selected>Выберите операцию</option>
                    <option value="square">площадь</option>
                    <option value="per">периметр</option>

                </select>
                <br><br>
                <input type="submit"  class="btn btn-info" value="Вычислить">

            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
      <?php  break;
} ?>
</body>
</html>

