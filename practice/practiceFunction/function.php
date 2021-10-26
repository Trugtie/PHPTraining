<?php
ini_set('log_errors', 'On');
ini_set('display_errors', 'On'); //tat hien thi loi
ini_set('error_reporting', E_ALL);


function xuatKeyValue( $arr=array()) {
for($i = 0; $i < count($arr); $i++){
echo "key = " . array_keys($arr)[$i] . ", value = " . array_values($arr)[$i]. '<br>';
}
}

function xuatKeyValue2( $arr =array()) {
    foreach($arr as $i => $element){
    echo "key = " . $i . ", value = " . $element. '<br>';
    }
}

function xuat3($arr =array()){
    foreach($arr as $key => $value){
        if(is_array($value)){
            foreach($value as $key => $value){
                echo "key = " . $key . ", value = " . $value. '<br>';
            }
        }
        else{
            echo "key = " . $key . ", value = " . $value. '<br>';
        }  
    }
}