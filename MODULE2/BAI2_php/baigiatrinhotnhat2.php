<?php
$number=[6,2,5,4,589,15];
$min=$number[0];
foreach($number as $key => $value) {
    if( $value < $min){
        $min = $value;
    }
}
echo 'so nho nhat :'.$min;
  // value      // min = 6
  //0 => 6
  // 1 => 2
  // 2 => 5
  // 3 => 4
  //4 => 589
  //5 => 15
//   $numbers = [6, 2, 5, 4, 589, 15];
// $min = $numbers[0];
// $second_min = 0;

// foreach ($numbers as $key => $value) {
//     if ($value < $min) {
//         $second_min = $min;
//         $min = $value;
//     } elseif ($value < $second_min && $value != $min) {
//         $second_min = $value;
//     }
// }

// echo 'Giá trị nhỏ thứ hai: ' . $second_min;
?> 
  