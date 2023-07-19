<?php
function gia_tri_nho_nhat($arr){
    $index = 0 ;
    $min = $arr[0];
    foreach($arr as $key => $value){
        if($value<$min){
            $min = $value;
            $index = $key;

    }
}
echo "gia tri nho nhat : " .$min."vi tri".$index;
}
$arr1=[1,2,3,4,5];
$min = gia_tri_nho_nhat(($arr1));