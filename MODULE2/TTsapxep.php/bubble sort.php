<?php
// sap xep noi bot giam dan 



$myArr = [1, 8, 7, 6, 5,4];
$count = count($myArr);
$t = 0;
for ($i = 0; $i < $count; $i++) {
    // chạy từ 0 tới đô dài của mảng 
    for ($j = 0; $j < $count - $i - 1; $j++) {
    // j = 0 ; j < 6 - 1 -1 ; j ++
        if ($myArr[$j] < $myArr[$j + 1]) {
            $temp = $myArr[$j + 1];
            $myArr[$j + 1] = $myArr[$j];
            $myArr[$j] = $temp;
        }
    }
    
}
echo "<pre>";
print_r($myArr);
echo "</pre>"



?>