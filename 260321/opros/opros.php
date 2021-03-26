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
            <form action="add.php" method="post">
                <div class="alert alert-primary" role="alert">
                    <label>Как вас зовут?</label>
                    <input type="text" name="name"><br><br>
                </div>
                <div class="alert alert-danger" role="alert">
                    <label>Как вам мероприятие?</label>
                    <textarea rows="5" cols="20" name="meropriyatie"></textarea><br><br>
                </div>
                <div class="alert alert-success" role="alert">
                    <label>Как вы про нас узнали?</label>
                    <input type="text" name="comment"><br><br>
                </div>
                <div class="alert alert-dark" role="alert">
                    <label>Контактный телефн:</label>
                    <input type="text" name="phone"><br><br>
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
<?php
