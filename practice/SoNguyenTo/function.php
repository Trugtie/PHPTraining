<?php
function kiemTraSNT($num){
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
}

function kiemTraSHT($num){
    $sum=0;
    for($i = 1; $i<$num;$i++){
        if ($num % $i == 0) {
            $sum+=$i;
        }
    }
    echo $result = $sum == $num ?   "$num la so hoan thien" :  "$num khong la so hoan thien";
}