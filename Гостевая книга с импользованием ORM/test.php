<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\CRUD;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook"
];

$crud = new CRUD($config);
$crud->setTableName("opros");
$crud->setIdName("nomer");


$crud->del(16);
$crud->ins(["name" => "Vova", "meropriyatie" => 600,"comment" => "Vova","phone" => "123456789"]);

$crud->upd(13,["name" => "Vova", "meropriyatie" => 600,"comment" => "Vova","phone" => "123456789"]);

$table = $crud->get();
print_r($table);

