<?php
print_r($_POST);
$q1 = $_POST["otvet1"];
$q2 = $_POST["otvet2"];
if ($q1 == 4 and $q2 == "Лондон") {
    echo "вы поступили";
} else {
    echo "вы не поступили";
}
