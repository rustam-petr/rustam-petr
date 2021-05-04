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
include_once "connect.php";

/** @var TYPE_NAME $config */
$sql = "SELECT * FROM `{$config['mysql']['table']}` WHERE id = $_GET[id]";
/** @var mysqli $link */
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <?php
    $fields = fieldsList($link, $config["mysql"]["table"]);
    foreach ($fields as $field) {
    ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="<?= $field ?>" value="<?= $row[$field] ?>">
        </div>
        <?php
    }
    ?>
    <input class="btn btn-primary" type="submit" value="Сохранить">
</form>
</body>
</html>


