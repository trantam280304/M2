<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

// isset: kiếm tra sự tồn tại của biến, chỉ số trong mảng
if( isset( $_REQUEST['ho_va_ten'] ) && isset( $_REQUEST['mat_khau'] ) ){
    // Lưu trữ
    $ho_va_ten = $_REQUEST['ho_va_ten'];
    $mat_khau = $_REQUEST['mat_khau'];

    // Xử lý
    if( $ho_va_ten == 'admin' && $mat_khau == '123456' ){
        echo 'Chao mung admin';
    }else{
        echo 'Tai khoan khong dung';
    }
}


?>
<form action="" method="get">
    Ten dang nhap: <input type="text" name="ho_va_ten" > <br>
    Mat khau: <input type="password" name="mat_khau" > <br>
    <input type="submit" value="Dang nhap">
</form>