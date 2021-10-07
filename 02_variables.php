<?php

// What is a variable: Store data

// Variable types
/* 
String
Integer
Float/Double
Boolean
Null
Array
Object
Resource
*/

// Declare variables
$name="Zura";
$age=22;
$isMale=true; // if false when print out empty string
$height=1.85;
$salary=null; // print out empty string

// Print the variables. Explain what is concatenation
echo $name."<br>";
echo $age."<br>";
echo $isMale."<br>";
echo $height."<br>";
echo $salary."<br>";

// Print types of the variables
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($height)."<br>";
echo gettype($salary)."<br>";

// Print the whole variable
echo var_dump($name,$age,$isMale,$height,$salary);

// Change the value of the variable
$name="false";

// Print type of the variable
echo gettype($name)."<br>";

// Variable checking functions
echo is_int($age)."<br>";
echo is_string($name)."<br>";
echo is_bool($isMale)."<br>";

// Check if variable is defined
echo isset($name)."<br>";
echo isset($address)."<br>";

// Constants
define("PI",3.14);
echo PI."<br>";
define("Oneyear","1 year");
echo Oneyear."<br>";

// Using PHP built-in constants
echo SORT_ASC."<br>";
echo PHP_INT_MAX."<br>";