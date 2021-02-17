<?php
//print_r($_FILES["userfile"]["name"]);
move_uploaded_file($_FILES["userfile"]["tmp_name"], "files\\" . $_FILES["userfile"]["name"]);
header("location: main.php");
