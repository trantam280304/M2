<?php 
/*
bai toan : tim gia tri x co ton tai trong mang hay khong ?
*/
// function searchNumber($number,$array){
//     for($i = 0 ; $i <count($array);$i++){
//         if($array[$i]==$number){
//             return $array[$i];
//         }
//     }
// }
// $arr = [1, 2, 3, 4, 5, 6, 7, 8,9];

// $a = 13;
// $tim = searchNumber($a,$arr);
// if ($tim == $a){
//     echo 'phan tu nay co o trong mang';
// }
// else{
//     echo 'khong co';
// }





$arr = [1, 2, 3, 4, 5, 6, 7, 8,9];
//      0  1  2  3  4  5  6  7 ,8   
function searchNumber($array, $x) {
    $left = 0;
    
    $right = count($array) - 1;
    
    while ($left <= $right) {
        $mid = ceil(($left + $right) / 2);
//      mid ở đây sẽ bằng 4
        if ($array[$mid] == $x) {

            return $mid;
        } else if ($x > $array[$mid]) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return -1;
}

$number = 1;

if (searchNumber($arr, $number) != -1) {
    echo "Phần tử " . $number . " có tồn tại trong mảng.";
} else {
    echo "Không có trong mảng.";
}









?>