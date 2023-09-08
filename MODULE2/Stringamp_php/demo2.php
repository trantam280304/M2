<?php


// 2. Hàm preg_match_all():

/* 
Về cơ chế hoạt động của hàm preg_match_all() cũng tương tự hàm preg_match() ở trên , 
tuy nhiên hai hàm này khác nhau ở chỗ , hàm preg_match_all() sẽ trả về toàn bộ các giá trị được so sánh khớp, 
còn hàm preg_match() chỉ trả về giá trị đầu tiên được so sánh khớp.  
*/



$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
print('<pre>');
preg_match_all($pattern, $subject, $matches);
print_r($matches);
print('</pre>');

