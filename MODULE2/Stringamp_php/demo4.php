<?php


// Hàm preg_replace():
// Hàm preg_replace dùng để tìm kiếm và thay thế một chuỗi nào đó khớp với đoạn Regular Expression truyền vào. 

// cu phap : preg_replace($pattern, $replacement, $subject)

/*
Hàm này tìm trong $subject các chuỗi con phù hợp với mẫu $pattern là một biểu thức RegExp, thay thế chuỗi tìm thấy bởi $replacement

$pattern : Biểu thức RegExp để tìm kiếm có thể là một chuỗi hoặc một mảng.
$subject : Chuỗi nhập vào để tìm kiếm
$replacement : Giá trị thay thế, có thể là chuỗi hoặc mảng.
 Nếu $pattern là mảng, $replacement là chuỗi thì mọi kết quả tìm kiểm theo $pattern được thay thể bởi $replacement.
 Nếu cả $pattern, $replacement là mảng thì nó thay thế theo phần tử tương ứng.

 */ 

 $string = "hom nay troi dep qua!";
 $pattern = "/dep/";
 $replacement = "xau";

 $new_string = preg_replace($pattern, $replacement, $string);

echo $new_string;