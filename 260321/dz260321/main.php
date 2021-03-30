

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
            <form action="bd.php" method="post">
                <div class="alert alert-primary" role="alert">
                    <label>Из какого вы города?</label>
                    <input type="text" name="city"><br><br>
                </div>
                <div class="alert alert-danger" role="alert">
                    <label>Ваш емайл?</label>
                    <input type="text" name="email"><br><br>
                </div>
                <div class="alert alert-success" role="alert">
                    <label>Ваш пол?</label>
                    <input type="text" name="pol"><br><br>
                </div>
                <div class="alert alert-dark" role="alert">
                    <label>Ваш возраст?</label>
                    <input type="text" name="age"><br><br>
                </div>

                <input class="btn btn-warning" type="submit" value="Отправить">
            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>

</body>
</html>
