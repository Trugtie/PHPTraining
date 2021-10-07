<?php

// Declaring numbers
$a=4;
$b=5;
$c=1.5;
// Arithmetic operations
echo $a + $b + $c . "<br>";
echo $a + $b * $c . "<br>";
// Assignment with math operators
$a+=$b;
echo $a . "<br>";

// Increment operator
echo $a++ . "<br>";
echo ++$a . "<br>";

// Decrement operator
echo $a-- . "<br>";
echo --$a . "<br>";

// Number checking functions

is_float($a);
is_double($a);
is_int($a);
echo is_numeric("123")."<br>"; //true
echo is_numeric("1a23")."<br>"; // false

// Conversion
$strNumber="12.34";
$number=(float)$strNumber;
echo var_dump($number) . "<br>";
$number = strval($strNumber);
echo var_dump($number) . "<br>";

// Number functions
echo abs(-15)."<br>";
echo pow(2,2)."<br>";
echo sqrt(4)."<br>";
echo max(2,5,1)."<br>";
echo min(2,4,5)."<br>";
echo floor(2.6)."<br>"; //round down
echo round(3.5)."<br>"; //round with math
echo round(3.3)."<br>";
echo ceil(1.2)."<br>"; //round up

// Formatting numbers
$number =123456789.123456;
//Parameters for number_format
// (variables, decimals(bao nhiêu số thập phân phía sau), decimals_separator(dấu ngăn số thập phân), thousands_separator(dấu ngăn đơn vị ngàn))    
echo number_format($number,2,",",".");


// https://www.php.net/manual/en/ref.math.php
