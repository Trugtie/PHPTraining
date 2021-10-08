<?php

// Create simple string
$name = "Zura";
$string1 = 'Hello I am '.$name.'. I am 28';
$string2 = "Hello I am $name. I am 28";
echo $string1 ."<br>";
echo $string2 ."<br>";
// String concatenation
echo 'Hello'.' World!'.'<br>';
// String functions
$string="    Hello World!    ";

echo "1 - ".strlen($string)."<br>";
echo "2 - ".trim($string)."<br>";
echo "3 - ".ltrim($string)."<br>";
echo "4 - ".rtrim($string)."<br>";
echo "5 - ".str_word_count($string)."<br>";
echo "6 - ".strrev($string)."<br>";
echo "7 - ".strtoupper($string)."<br>";
echo "8 - ".strtolower($string)."<br>";
echo "9 - ".ucfirst("hello world")."<br>";
echo "10 - ".lcfirst("Hello World")."<br>";
echo "11 - ".ucwords("welcome trugtie")."<br>";
echo "12 - ".strpos("abch ed","H")."<br>";
echo "13 - ".stripos("abcH ed","h")."<br>";
echo "14 - ".substr($string,4,5)."<br>";
echo "15 - ".str_replace("H","D",$string)."<br>";
echo "16 - ".str_ireplace("h","D",$string)."<br>";
// Multiline text and line breaks
$longText="
Hello, my name is Zura
I am 27,
I love my daughter
";

echo $longText.'<br>';
echo nl2br($longText)."<br>";

// Multiline text and reserve html tags

$longText="
Hello, my name is <b>Zura</b>
I am <b>27</b>,
I love my daughter
";

echo $longText.'<br>';
echo nl2br($longText)."<br>";
echo nl2br(htmlentities($longText))."<br>";
// echo html_entity_decode()."<br>";
// https://www.php.net/manual/en/ref.strings.php