<?php


//      0, 1, 2, 3, 4, 5, 6
//        
$arr = [21, 23, 20, 26, 27];

for($i = 0;$i < count($arr) - 1; $i++){
    $min = $i ;

for($j = $i + 1 ; $j < count($arr); $j++){
    if ($arr[$j] < $arr[$min]){
        $min = $j;
    }
}
    if($min != $i){
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] =  $temp;
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>"


?>