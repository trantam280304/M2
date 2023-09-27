<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm chuyên mục</h1>
    <form method = "POST" action ="<?php echo route('BaiController.add')?>">
        <input type="text" name="category_name" placeholder="ten chuyen muc">
    <button type = "submit"> Them</button>
    </form>
</body>
</html>