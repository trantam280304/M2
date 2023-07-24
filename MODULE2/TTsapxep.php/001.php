<?php 
// bai xap sep chon (selection sort)

$arr =  [1, 9, 4.5, 6.6, 5.7, -4.5];

for($i = 0; $i < count($arr)-1;$i++){
    $min = $i;
    for($j= $i+1; $j < count($arr); $j++){
        if($arr[$j]< $arr[$min]){
            $min = $j;
        }
    }
    if($min != $i){
        $tempr = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $tempr;
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
