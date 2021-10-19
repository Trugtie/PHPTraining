<?php
function kiemTraSNT($num)
{
    if ($num < 2) return false;
    else {
        $i = 2;
        while ($i < $num) {
            if ($num % $i == 0) {
                return false;
            }
            $i++;
        }
    }
    return true;
}

function kiemTraSHT($num)
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $result = $sum == $num ?   true :  false;
}

function locMangSNTvaSHT($arr)
{
    $arrSNT = [];
    $arrSHT = [];
    foreach ($arr as $element) {
        if (kiemTraSNT($element))
            array_push($arrSNT, $element);
        else if (kiemTraSHT($element))
            array_push($arrSHT, $element);
    }
    $snt = implode(',', $arrSNT);
    $sht = implode(',', $arrSHT);

    if (empty($snt))
        echo "Khong co so nguyen to nao trong mang!<br>";
    else
        echo "Mang so nguyen to: $snt<br>";


    if (empty($sht))
        echo "Khong co so hoan thien nao trong mang!<br>";
    else
        echo "Mang so hoan thien: $sht<br>";
}
