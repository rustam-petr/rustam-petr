<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = file("golos.txt");
    $question = $data[0];
    unset($data[0]);
 
    $answers = [];
    foreach ($data as $value) {
        $answers[] = explode(' - ', $value)[0];
    }

    print_r($answers);

    ?>
    <form action="golos.php" method="POST">
<?=$question ?>
<br>
<?php
foreach ($answers as $key => $value) {
  echo "<input type='radio' value=$key name='answers'>$value<br\n>";
}

?>
<input type="submit" value="OK">

    </form>
</body>

</html>