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
            <?php
            $link = mysqli_connect("localhost", "root", "root", "GuestBook");

            $sql = "SELECT * FROM `gb`";
            $result = mysqli_query($link, $sql);


            echo "<table class='table table-dark table-striped'>";
            echo "<th>Message</th>
                     <th>Name</th>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>$row[message]</td><td> $row[name]</td></tr>";
            }
            echo "</table>";

            mysqli_free_result($result);
            mysqli_close($link);
            ?>
            <br>
            <form action="add.php" method="post">
                <textarea rows="5" cols="35" name="message"></textarea><br>
                <input type="text" name="name"><br>
                <input type="submit" value="ok">

            </form>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>

