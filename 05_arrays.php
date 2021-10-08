<?php

// Create array
$fruits=["Banana","Apple","Orange"];
// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Get element by index
echo $fruits[1].'<br>';
// Set element by index
$fruits[0]='Peach';
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array has element at index 2
echo isset($fruits[1])."<br>";
echo isset($fruits[3])."<br>";
echo isset($fruits[2])."<br>";
// Append element
$fruits[]="Banana";
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits,'foo');
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the end of the array
echo array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
array_unshift($fruits,"boo");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the beginning of the array
echo array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Split the string into an array
$string="Banana,Apple,Peach";
echo "<pre>";
var_dump(explode(",",$string));
echo "</pre>";

// Combine array elements into string
echo implode("&",$fruits).'<br>';

// Check if element exist in the array
echo in_array("Apple",$fruits).'<br>';

// Search element index in the array
echo array_search("Orange",$fruits).'<br>';

// Merge two arrays
$vegetables = ["Potato","cucumber"];
echo "<pre>";
var_dump(array_merge($fruits,$vegetables));
var_dump([...$fruits,...$vegetables]);
echo "</pre>";

// Sorting of array (Reverse order also)
$number=[2,5,1,3,7,4,19];

echo "<pre>";
var_dump($number);
echo "</pre>";

sort($number);

echo "<pre>";
var_dump($number);
echo "</pre>";

rsort($number);

echo "<pre>";
var_dump($number);
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name'=>'Brad',
    'surname'=>'Traversy',
    'age'=>30,
    'hobbies'=>['Tennis','Video Game']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

echo '<pre>';
print_r($person);
echo '</pre>';
// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel']='TraversyMedia';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])){
//     $person['address']='unknown';
// }

$person['address']??='unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todo=[
    ['title'=>'Todo title 1','complete'=>true],
    ['title'=>'Todo title 2','complete'=>false]
];

echo "<pre>";
var_dump($todo);
echo "</pre>";