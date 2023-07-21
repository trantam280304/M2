<?php
// $array = [
//     [1,2,3,4,5],
//     [6,8,9,4,1],
// ];
// $max = $array[0][0];
// for($i = 0 ; $i<count($array);$i++){
//     for($j=0;$j<count($array[$i]);$j++){
//         if($array[$i][$j]>$max){
//             $max = $array[$i][$j];
//         }
//     }
// }
// echo "gia tri lon nhat la".$max
// 

$array = [
    [3, 4, 7, 9, 10],
    [12, 41, 23, 24]
];
$max1 = $array[0][0];
$max2 = $array[0][1];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] > $max1) {
            $max2 = $max1;
            $max1 = $array[$i][$j];
        } else if ($array[$i][$j] > $max2 && $array[$i][$j] < $max1) {
            $max2 = $array[$i][$j];
        }
    }
}
echo " so lon thu hai la : " . $max2


    // $array = [
    //     [1,2,3,4,5],
    //     [6,8,9,4,1,10],
    // ];
    // $max1 = $array[0][0];
    // $max2 = $array[0][1];
    // for($i = 0 ; $i<count($array);$i++){
    //     for($j=0;$j<count($array[$i]);$j++){
    //         if($array[$i][$j]>$max1){
    //             $max2 = $max1;
    //             $max1 = $array[$i][$j];
    //         } elseif ($array[$i][$j]>$max2 && $array[$i][$j]<$max1) {
    //             $max2 = $array[$i][$j];
    //         }
    //     }
    // }
    // echo "Số lớn thứ hai là: ".$max2;
?>






