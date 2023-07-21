<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $so1 = $_REQUEST['so1'];
    $so2 = $_REQUEST['so2'];
    $phep_tinh = $_REQUEST['phep_tinh'];
    $error = '';
    switch ($phep_tinh) {
        case 'cong':
            $kq = $so1 + $so2;
            break;

        case 'tru':
            $kq = $so1 - $so2;
            break;
        case 'nhan':
            $kq = $so1 * $so2;
            break;
        case 'chia':
            if ($so2 == 0) {
                $error = 'Không thể chia cho số 0';
            } else {
                $kq = $so1 / $so2;
            }
            break;
        default:
            $error = 'Phép tính không hợp lệ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính</title>

</head>

<body>
    <form action="" method="POST">
        <h1>Máy tính</h1>
        Nhập số thứ nhất:
        <input type="text" name="so1" value=""><br>
        Nhập số thứ hai:
        <input type="text" name="so2" value=""><br>
        Chọn phép tính:
        <select name="phep_tinh">
            <option value="cong">+</option>
            <option value="tru">-</option>
            <option value="nhan">*</option>
            <option value="chia">/</option>
        </select>
        <input type="submit" value="Tính"><br>
        <span><?php if (!empty($error)) {
                    echo '<span style="color:red">' . $error . '</span><br>';
                } else if (isset($kq)) {
                    echo '<span>Kết quả: ' . $kq . '</span><br>';
                } ?>

        </span>
    </form>
</body>

</html>