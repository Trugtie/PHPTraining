<?php
require_once "./Person.php";
require_once "./Student.php";

$p=new Person("Peter","Mark");
$p->name="Peters";
$p->surname="Mark";

echo '<pre>';
var_dump($p);
echo '</pre>'; 

echo $p->name.'<br>';

$p1=new Person("Trug","Tie");
$p1->setAge(31);
echo $p1->getAge()."<br>";
echo Person::$counter.'<br>';
echo Person::getcounter();

$newStudent = new Student("Mark","Tie","DH123");

echo '<pre>';
var_dump($newStudent);
echo '</pre>'; 
