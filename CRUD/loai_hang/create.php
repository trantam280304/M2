<?php 
include_once '../db.php';
  if ($_SERVER['REQUEST_METHOD']=="POST"){
  // echo '<pre>';
  // print_r ($_REQUEST);
  // die();
  $TENLOAIHANG = $_REQUEST['TENLOAIHANG'];
 

  $sql = "INSERT INTO `loaihangs` 
  (`TENLOAIHANG`)
  VALUES 
  ('$TENLOAIHANG')";
   //Thuc hien truy van
  $conn->exec($sql);

  // chuyen huong ve trang danh sach
  header("Location: index.php");

}
?>




<!DOCTYPE html>
<html>
<body>

<h2>THÊM LOẠI HÀNG</h2>

<form action="" method="POST">
  <label for="fname">TÊN LOẠI HÀNG:</label><br>
  <input type="text"  name="TENLOAIHANG" ><br><br>

  <input type="submit" value="Submit">
</form> 



</body>
</html>

