<?php

// cú pháp

function func_name($vars)
{
    // các đoạn code
    return $vars;
}


// ví dụ 1

// Số cần kiểm tra
$number = 12;
  
// gọi đến hàm kiem_tra_so_chan và truyền biến cần kiểm tra vào
// vì hàm kiem_tra_so_chan trả về true/false nên ta có thể đặt nó trong câu điều
// kiện if như thế này
if (kiem_tra_so_chan($number)){
    echo 'Số chẵn';
}
else{
    echo 'Số lẽ';
}
  
// Hàm kiểm tra số chẵn sẽ trả về true nếu $number là số chẵn và ngược lại.
// biến $number gọi là biến truyền vào hàm, đó chính là biến cần kiểm tra
function kiem_tra_so_chan($number)
{
    if ($number % 2 == 0)
        return true;
    else return false;
}