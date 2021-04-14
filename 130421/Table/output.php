<?php
$total = new Price($_POST["width"], $_POST["length"], $_POST["height"],$_POST["priceOne"]);
switch ($_POST["op"]) {
    case "sm":
        $total->setWidthSm($_POST["width"]);
        $total->setLengthSm($_POST["length"]);
        $total->setHeightSm($_POST["height"]);
        echo round($total->tablePrice(),2);
        break;
    case "m":
        $total->setWidthM($_POST["width"]);
        $total->setLengthM($_POST["length"]);
        $total->setHeightM($_POST["height"]);
        echo round($total->tablePrice(),2);
        break;
    case "dm":
        echo round($total->tablePrice(),2);
        break;
    case "inch":
        $total->setWidthInch($_POST["width"]);
        $total->setLengthInch($_POST["length"]);
        $total->setHeightInch($_POST["height"]);
        echo round($total->tablePrice(),2);
        break;

}
