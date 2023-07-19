<style>
    form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f6f6f6;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
}

input[type="text"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}
</style>
<form action="" method="post">
    <label>Mô tả của sản phẩm</label><br>
    <input type="text" name="mota" id="mota"><br><br>
    <label>Giá niêm yết của sản phẩm</label><br>
    <input type="text" name="niemyet" id="niemyet"><br> <br>
    <label> Tỷ lệ chiết khấu (phần trăm)</label><br>
    <input type="text" name="tyle" id="tyle"><br><br>
    <input type="submit" value="Tính chiết khấu" />
</form>
<?php
if($_SERVER["REQUEST_METHOD"]== "POST") {
       $mota =$_POST["mota"];
       $niemyet = $_POST["niemyet"];
       $tyle = $_POST["tyle"];
       $Lg_chiet_khau = $niemyet*$tyle*0.1;
       echo "Lương chiết khẩu là :" .  $Lg_chiet_khau;
}
?>