<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
</head>
<body>
<div class="pop">
    <?php
    include "functions.php";

    foreach (loadMessages() as $row) {
        echo "<p>" . dateFormat($row["date_time"]) . "<br>" .
            smile($row["msg"]) . "<br>" .
            $row["name"] . "<br></p>";
    }
    ?>
</div>

<div class="tut">
    <form action="add.php" method="post">
        <textarea class="form-control" name="msg" cols="50" rows="5"></textarea><br>
        <input class="form-floating" type="text" name="name">
        <input  class="btn btn-warning" type="submit" value="✅">

    </form>
</div>
</body>
</html>

