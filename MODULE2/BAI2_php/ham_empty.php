<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // nếu dùng isset thì có nghĩa là muốn biết được là biến đấy đã đx khai báo hay chưa
    $ten = true;
if (empty($ten )) {
    echo "Biến 'ten' đang rỗng.";
} else {
    echo "Biến 'ten' không rỗng và có giá trị là: " . $ten;
}

?>
</body>
</html>