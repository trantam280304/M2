<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value=$_REQUEST['so_dien_thoai'];
    $viettel=[];
    $mobi=[];
    $vina=[];
    // chuyen doi chuoi thanh mang 
    $ma_so= explode(",",$value);
    // duyet mang 
    foreach($ma_so as $gia_tr ){
       $tim_so = substr($gia_tr,0,3);
        if($tim_so == "096"){
            array_push( $viettel,$gia_tr);
        }else if ($tim_so =="077") {
            array_push( $mobi,$gia_tr);
        }else if($tim_so =="083"){
            array_push( $vina,$gia_tr);
        }
        }
    //    in ra du lieu
       echo "<br>Các số Viettel là: ".implode(",",$viettel);
       echo "<br>Các số mobi là: ".implode(",",$mobi);
       echo "<br>Các số vina là: ".implode(",",$vina); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân loại số điện thoại</title>
</head>
<body>
    <form action="" method="POST">
        <textarea name="so_dien_thoai"></textarea>
        <input type="submit" value="kết quả"/>
    </form>
</body>
</html>
