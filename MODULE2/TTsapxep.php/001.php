<?php 
// bai xap sep chon (selection sort)

$arr =  [1, 9, 4.5, 6.6, 5.7, -4.5];
    //   i ; j

for($i = 0; $i < count($arr)-1;$i++){
    $max = $i;
    
    for($j= $i+1; $j < count($arr); $j++){
        if($arr[$j] < $arr[$max]){
            $max = $j;
        }
    }
    if($max != $i){
        $tempr = $arr[$i];
        $arr[$i] = $arr[$max];
        $arr[$max] = $tempr;
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
