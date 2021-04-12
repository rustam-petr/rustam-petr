<?php
    switch ($_POST["ch"]) {
        case "cube":
            header("location:cube.html");
            break;
        case "trap":
            header("location:trap.html");
            break;
        case "okr":
            header("location:okr.html");
            break;
    }
