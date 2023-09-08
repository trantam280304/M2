
<?php

// 3. Hàm preg_split(): 
// Sử dụng hàm pre_split để chia nhỏ chuỗi thành mảng chứa các chuỗi con.

// CU PHAP : preg_split($pattern, $subject)

// $pattern : Biểu thức RegExp để tìm kiếm
 // $subject : Chuỗi nhập vào để tìm kiếm và chia nhỏ
// Hàm này tìm trong $subject các chuỗi con phù hợp với mẫu $pattern là một biểu thức RegExp.




$ip = "tran,quang,tram, c5";
$iparr = preg_split("/\,/", $ip);

print "$iparr[0] <br />";
print "$iparr[1] <br />";
print "$iparr[2] <br />";
print "$iparr[3] <br />";
