<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo "Hello I am Zura" . '<br>';
}
hello();
hello();
hello();
// Function with argument
function hello1($name)
{
    echo "Hello I am $name!" . '<br>';
}
hello1("Tien");
// Create sum of two functions
function sum($a, $b)
{
    echo $a + $b . '<br>';
}
sum(1, 2);
// Create function to sum all numbers using ...$nums
function sumAll($nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum;
}
echo sumAll([1, 2, 3]) . "<br>";

function sumAll1(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum;
}
echo sumAll1(2, 3, 4) . "<br>";
// Arrow functions
function sumArrow(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}

echo sumArrow(5, 6, 7);
