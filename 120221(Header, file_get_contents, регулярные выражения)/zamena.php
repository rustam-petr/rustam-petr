<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$random = rand(0, 99);
echo $random . "<br>";

$number = preg_split('//', $random, -1, PREG_SPLIT_NO_EMPTY);

$arr = [
    "ноль",
    "один",
    "два",
    "три",
    "четыре",
    "пять",
    "шесть",
    "семь",
    "восемь",
    "девять"
];

for ($i = 0; $i < count($number); $i++) {
    $text = preg_replace("/" . $number[$i] . "/", $arr[$number[$i]], $number[$i]);
    // echo $text;
    $sum.= $text." ";
}
echo $sum."<br>";

?>
<form action="?" method="post">
    <input type="text" name="text">
    <!-- <input type="hidden" name="hidden" value="<?php echo $text; ?>"> -->
    <input type="submit" value="ok">
</form>
<?php

$a = $_POST["text"];
echo $a;
//echo $str = strcmp($sum, $a);

//// if (isset($_POST["sub"])) {
//if ($str == 0) {
//    echo "yes";
//} else {
//    echo "no";
//}
//// }
echo preg_match_all("/^".$sum."$/",$a,$matches);
print_r($matches);
?>



</body>

</html>
