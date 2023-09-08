<?php
$mang =  [5, -4, 3, 7,2];
//        j  i
for($i =1 ; $i < count($mang);$i++){
    $j = $i - 1;
    $temp = $mang[$i];
    while($j >= 0    &&  $temp < $mang[$j]){
       $mang[$j+1] = $mang[$j];
       $j-- ;
    }
    $mang[$j+1]= $temp;
}
echo "<pre>";   
print_r($mang);
echo "</pre>"







?>