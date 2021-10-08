<?php

$age = 20;
$salary = 300000;

// Sample if
if($age===20){
    echo "1";
}
// Without circle braces
if ($age===20) echo "1";
// Sample if-else
if($age > 20){
    echo "1";
}else{
    echo "2";
}
// Difference between == and ===
echo '<br>';
echo $age==20;
echo $age=='20';
echo $age==='20';
echo $age===20;
// if AND
if ($age > 20 && $salary===300000){
    echo "Do something";
}
// if OR
if ($age > 20 || $salary===300000){
    echo "Do something";
}
// Ternary if
echo $age<22 ? 'Young' : 'Old';
// Short ternary
$myAge=$age?:18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';
// Null coalescing operator
$myName=isset($name)? $name:'John';
echo $myName."<br>";
$myname=$name ?? 'John';
echo $myName."<br>";
// switch
$userRole = "admin";
switch ($userRole){
    case 'admin':
        echo 'admin'.'<br>';
        break;
    case 'editor':
        echo 'editor'.'<br>';
        break;
    default:
        echo 'nothing role'.'<br>';
}