<?php
include_once '../db.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // echo '<pre>';
  // print_r ($_REQUEST);
  // die();
  $TENLOAIHANG = $_REQUEST['TENLOAIHANG'];
  // xử lý ảnh 
  $image = '';
  $image = $row['IMAGE'];
  if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
    $uploadDir = ROOT_DIR . '/public/uploads/';
    $uploadFile = $uploadDir . basename($_FILES['IMAGE']['name']);

    if (move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadFile)) {
      $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
    }
  }


  $sql = "INSERT INTO `loai_hangs` 
    ( `TENLOAIHANG`,`IMAGE`) 
    VALUES 
    ('$TENLOAIHANG','$image')";
  //Thuc hien truy van
  $conn->exec($sql);

  // chuyen huong ve trang danh sach
  header("Location: index.php");
}

?>

<?php include '../includes/header.php'?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h2 {
      color: #191970;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 16px;
      font-family: "Roboto", Arial, sans-serif;
    margin-left: 20px;

    }

    form {
      width: 300px;
      margin: 20px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 8px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <h2>THÊM LOẠI HÀNG</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <label for="fname">Tên loại hàng</label><br>
    <input type="text" name="TENLOAIHANG" required><br>
    <label for="image">Ảnh:</label><br>
    <input type="file" name="IMAGE" required><br><br>

    <input type="submit" value="THÊM MỚI">
  </form>
</body>
</html>

