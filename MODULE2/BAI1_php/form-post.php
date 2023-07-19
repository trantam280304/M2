<?php
    // $_SERVER: thông tin máy chủ
    // $_POST  : nhận dữ liệu gửi lên qua method POST
    // $_GET   : nhận dữ liệu gửi lên qua method GET
    // $_REQUEST : nhận dữ liệu gửi lên qua method GET

    // if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        
    //     echo '<pre>';
    //     print_r($_REQUEST);
    //     echo '</pre>';

    //    $ho_va_ten = $_REQUEST['ho_va_ten'];
    //    $mat_khau = $_REQUEST['mat_khau'];
       
    //   if($ho_va_ten == "trantam" && $mat_khau=="1234"){
    //     echo "chaò mừng bạn";
    //   }else{
    //       echo "tài khoản không đúng";
    //   }
    // }
    

?>
<form action="" method="post">
    Ten dang nhap: <input type="text" name="ho_va_ten" > <br>
    Mat khau: <input type="password" name="mat_khau" > <br>
    <input type="submit" value="Dang nhap">
</form> 
