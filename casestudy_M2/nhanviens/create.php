<?php 
include_once '../db.php';
$sql = "SELECT * FROM nhanviens";
// Truy vấn
$stmt = $conn->query($sql);
// Trả về dữ liệu
$rows = $stmt->fetchAll();
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array
  if ($_SERVER['REQUEST_METHOD']=="POST"){
  // echo '<pre>';
  // print_r ($_REQUEST);
  // die();

  $HOVATEN = $_REQUEST['HOVATEN'];
  $GIOITINH = $_REQUEST['GIOITINH'];
  $NGAYSINH = $_REQUEST['NGAYSINH'];
  $NGAYNHAPVIEC = $_REQUEST['NGAYNHAPVIEC'];
  $DIACHI = $_REQUEST['DIACHI'];
  $SDT = $_REQUEST['SDT'];
  $LUONG = $_REQUEST['LUONG'];
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
  


  
  $sql = "INSERT INTO `nhanviens` 
  ( `HOVATEN`, `GIOITINH`, `NGAYSINH`, `NGAYNHAPVIEC`,`DIACHI`,`SDT`,`LUONG`,`IMAGE`)
  VALUES 
  ('$HOVATEN','$GIOITINH','$NGAYSINH', '$NGAYNHAPVIEC','$DIACHI','$SDT','$LUONG','$image')";
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
  <title>Thêm nhân viên</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 10px;
    }

    h2 {
      margin-bottom: 20px;
      color: #000;
      margin-left:490px;
    }

    form {
      background-color: #fff;
      border-radius: 4px;
      padding: 20px;
    }

    label {
      font-weight: bold;
      color: #00008B;
    }

    input[type="text"],
    input[type="number"],
    select,
    input[type="date"],
    input[type="file"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
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

<h2>THÊM NHÂN VIÊN</h2>

<form action="" method="POST" enctype="multipart/form-data">
  <label for="fname">HỌ VÀ TÊN:</label><br>
  <input type="text" name="HOVATEN" required><br><br>
  
  <label for="gioitinh">GIỚI TÍNH:</label><br>
  <select name="GIOITINH" required>
    <option value="Nam">Nam</option>
    <option value="Nữ">Nữ</option>
  </select><br><br>
  
  <label for="ngaysinh">NGÀY SINH:</label><br>
  <input type="date" name="NGAYSINH" required><br><br>
  
  <label for="ngaynhapviec">NGÀY NHẬP VIỆC:</label><br>
  <input type="date" name="NGAYNHAPVIEC" required><br><br>
  
  <label for="diachi">ĐỊA CHỈ:</label><br>
  <input type="text" name="DIACHI" required><br><br>
  
  <label for="sdt">SĐT:</label><br>
  <input type="number" name="SDT" required><br><br>
  
  <label for="luong">Lương:</label><br>
  <input type="number" name="LUONG" required><br><br>
  
  <label for="image">Ảnh:</label><br>
  <input type="file" name="IMAGE" required><br><br>

  <input type="submit" value="THÊM MỚI">
  
</form>

</body>
</html>
<?php include '../includes/footer.php'?>
