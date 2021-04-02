<?php
include_once "connect.php";

$sql = "DELETE FROM {$config['mysql']['table']} WHERE id = $_GET[id]";
/** @var mysqli $link */
mysqli_query($link, $sql);

header("Location: show.php");
