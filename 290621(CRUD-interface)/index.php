<?php

use App\DB;
use App\JsonTable;
use App\PhpTable;
use App\TxtTable;

include "vendor/autoload.php";

//$json = new JsonTable("table2.json");
//
////print_r($json->read());
//
//$json->create(["Name" => "Rustam", "Salary" => 1000]);

//$json->delete(1);

//$json->update(2,["Name" => "Vasya", "Salary" => 77777]);

//$db = new DB(new JsonTable("table3.json"));
//$db->insert(["Name" => "Rustam", "Salary" => 1000]);

$db = new DB(new PhpTable("table.php"));
//print_r($db->select());
//$db->insert(["Name" => "Rustam", "Salary" => 1000]);
//$db->insert(["Name" => "Ivan", "Salary" => 70007]);
//$db->update(1,["Name" => "Ivan", "Salary" => 555]);
//$db->delete(4);

$db = new DB(new TxtTable("table.txt"));
print_r($db->select());
$db->insert(["1","Name:Ivan","ZP:70007"]);