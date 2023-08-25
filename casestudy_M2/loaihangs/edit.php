<?php 
include_once '../db.php';
if( isset( $_GET['id'] ) ){
    $id = $_GET['id'];
}else{
    $id = 0;
}

$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;

if( !$id ){
    header("Location: index.php");
}
$sql = "SELECT * FROM `loai_hangs` WHERE MALOAIHANG = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
    // 
    $TENLOAIHANG = $_REQUEST['TENLOAIHANG'];
   // xử lý ảnh
   $name = $_REQUEST['name'];
   $country = $_REQUEST['country'];
   $image = '';
 
 
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // ...
     $image = $row['IMAGE'];
 
     if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
       $uploadDir = ROOT_DIR . '/public/uploads/';
       $uploadFile = $uploadDir . basename($_FILES['IMAGE']['name']);
 
       if (move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadFile)) {
         $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
       }
     }
   }

    $sql = "UPDATE `loai_hangs` SET `TENLOAIHANG` = '$TENLOAIHANG',`IMAGE` = '$image'  WHERE `MALOAIHANG` = $id";
     //Thuc hien truy van
     $conn->exec($sql);

     // chuyen huong ve trang danh sach
     header("Location: index.php");
}
?>
<?php include '../includes/header.php'?>


<!DOCTYPE html>
<html>
  <style>
     body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 0px;
  background-color: #fff;
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  margin-bottom: 20px;
  color: #001100;
  margin-left: 290px;

}

form {
 width: 1200px;
    margin: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #0000DD;
}

input[type="text"],
input[type="number"],
select {
  width: 70%;
  padding: 8px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}

input[type="file"] {
  margin-top: 8px;
  margin-left: 50px;
background-color:#DCDCDC

}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
  </style>
<body>

<h2>SỬA LOẠI HÀNG</h2>

<form action="" method="POST" enctype="multipart/form-data">
  <label for="fname">TÊN LOẠI HÀNG:</label><br>
  <input type="text"name="TENLOAIHANG"value="<?= $row['TENLOAIHANG'];?>" ><br><br>

  <?php if (!empty($row['IMAGE'])) : ?>
    <img src="<?= 'http://localhost/casestudy_M2/' . htmlspecialchars($row['IMAGE']); ?>" alt="<?= htmlspecialchars($row['MALOAIHANG']); ?>" style="max-width: 200px;">
  <?php endif; ?>
    
  <input type="file" name="IMAGE"><br><br>
  <input type="submit" value="SỬA">
</form> 



</body>
</html>
<?php include '../includes/footer.php'?>
