<?php
include "Person.php";
include 'Worker.php';
include 'Student.php';
include 'Ingeneer.php';

$worker = new Worker("Alex", 20);
echo $worker->say() . "<br>";
echo $worker->doJob();

echo "<br>";

$student = new Student("Oleg", 18);
echo $student->say() . "<br>";
echo $student->doJob();

echo "<br>";

$ingeneer = new Ingeneer("Vasya", 35);
echo $ingeneer->say() . "<br>";
echo $ingeneer->doJob();