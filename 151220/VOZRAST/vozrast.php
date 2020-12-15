<?php
$vozrast = $_POST["vozrast"];


if ($vozrast <= 30) {
    echo "Вы юноша";
} else if ($vozrast >= 60) {
    echo "Вы дедушка";
} else {
    echo "Вы мужчина";
}
