<?php
// 1. Hàm preg_match():
// Hàm preg_match() được dùng để kiểm tra, so khớp và lấy kết quả của việc so sánh chuỗi dựa vào biểu thức chính quy. Hàm trả về TRUE/FALSE. 

// Cú pháp:

// preg_match($pattern, $subject, &$matches)
// Trong đó: 

// $pattern là biểu thức Regular Expression
// $subject là chuỗi cần kiểm tra
// $matches là kết quả trả về, đây là một tham số tùy chọn, truyền vào ở dạng tham chiếu.

// Kết quả: Hàm preg_match() sẽ trả về TRUE nếu so khớp $pattern với $subject và FALSE nếu không khớp.


$sdt = '(+84)944.612.567';
$pattern = '/^\(\+84\)[0-9]{3}\.[0-9]{3}\.[0-9]{3}$/';
if(preg_match($pattern, $sdt, $matches)){
    echo 'Số điện thoại hợp lệ';
}
else {
    echo 'Số điện thoại không hợp lệ';
}

  








