<?php
//kiem tra so nguyen to
$num = 4;
$i = 2;
$isSNT = true;
if ($num < 2)  echo "$num khong phai la so nguyen to" . "<br>";
else {
    while ($i < $num) {
        if ($num % $i == 0) {
            echo "$num khong phai la so nguyen to" . "<br>";
            $isSNT = false;
            break;
        }
        $i++;
    }
    if ($isSNT) {
        echo "$num la so nguyen to" . "<br>";
    }
}

if ($num < 2)  echo "$num khong phai la so nguyen to" . "<br>";
else {
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i == 0) {
            echo "$num khong phai la so nguyen to" . "<br>";
            $isSNT = false;
            break;
        }
    }
    if ($isSNT) {
        echo "$num la so nguyen to" . "<br>";
    }
}

if ($num < 2)  echo "$num khong phai la so nguyen to" . "<br>";
else {
    do{
        if ($num % $i == 0) {
            echo "$num khong phai la so nguyen to" . "<br>";
            $isSNT = false;
            break;
        }
        $i++;
    } while ($i < $num);
    if ($isSNT) {
        echo "$num la so nguyen to" . "<br>";
    }
}

//kiem so hoan thien
$num=6;
$sum=0;
for($i = 1; $i<$num;$i++){
    if ($num % $i == 0) {
        $sum+=$i;
    }
}
$result = $sum == $num ?   "$num la so hoan thien" :  "$num khong la so hoan thien";
echo $result;


