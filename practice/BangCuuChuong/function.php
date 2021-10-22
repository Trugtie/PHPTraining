<?php
function randomColor(){
    $colors = ["#50cbf7", "#00b298", "#8ec545", "#fcad2c", "#ef3564"];
    $color = "";
    $color = $colors[rand(0, count($colors) - 1)];
    return $color;
}

function maxNum($arr){
    $max=$arr[0];
    foreach($arr as $i  => $element){
        if(!is_numeric($element)) continue;
        if($arr[$i]>$max) $max=$arr[$i];
    }
    return $max;
}

function minNum($arr){
    $min=$arr[0];
    foreach($arr as $i => $element){
        if(!is_numeric($element)) continue;
        if($arr[$i]<$min) $min=$arr[$i];
    }
    return $min;
}

function orderArr($arr){
    foreach($arr as $i => $element){
        if(!is_numeric($element)) unset($arr[$i]);
    }
    sort($arr);
    return $arr;
}
