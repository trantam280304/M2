<?php
include_once '../db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (!$id) {
    header("Location: index.php");
}

$sql = "SELECT * FROM `nhanviens` WHERE MANHANVIEN = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array 
// Lay ve du lieu duy nhat
$row = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Lấy dữ liệu người dùng gửi lên
    $HOVATEN = $_REQUEST['HOVATEN'];
    $GIOITINH = $_REQUEST['GIOITINH'];
    $NGAYSINH = $_REQUEST['NGAYSINH'];
    $NGAYNHAPVIEC = $_REQUEST['NGAYNHAPVIEC'];
    $DIACHI = $_REQUEST['DIACHI'];
    $SDT = $_REQUEST['SDT'];
    $LUONG = $_REQUEST['LUONG'];
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
    $sql = "UPDATE `nhanviens` SET `IMAGE` = '$image', `HOVATEN` = '$HOVATEN', `GIOITINH` = '$GIOITINH', `NGAYSINH` = '$NGAYSINH', `NGAYNHAPVIEC` = '$NGAYNHAPVIEC', `DIACHI` = '$DIACHI', `SDT` = '$SDT', `LUONG` = '$LUONG' WHERE `MANHANVIEN` = $id";
    // Thực hiện truy vấn
    $conn->exec($sql);

    // Chuyển hướng về trang danh sách
    header("Location: index.php");
}
?>

<?php include '../includes/header.php'?>

<!DOCTYPE html>
<html>
<body>
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
<h2>Sửa nhân viên</h2>

<form action="" method="POST" enctype="multipart/form-data" >
  <label for="fname">TÊN NHÂN VIÊN:</label><br>
  <input type="text" name="HOVATEN" value="<?= $row['HOVATEN']; ?>"><br>
  
  <label for="gioitinh">GIỚI TÍNH:</label><br>
  <select name="GIOITINH">
    <option value="Nam" <?php if ($row['GIOITINH'] === 'Nam') echo 'selected'; ?>>Nam</option>
    <option value="Nữ" <?php if ($row['GIOITINH'] === 'Nữ') echo 'selected'; ?>>Nữ</option>
  </select><br><br>
  
  <label for="lname">NGÀY SINH:</label><br>
  <input type="date" name="NGAYSINH" value="<?= $row['NGAYSINH']; ?>"><br><br>
  
  <label for="lname">NGÀY NHẬP VIỆC:</label><br>
  <input type="date" name="NGAYNHAPVIEC" value="<?= $row['NGAYNHAPVIEC']; ?>"><br><br>
  
  <label for="lname">ĐỊA CHỈ:</label><br>
  <input type="text" name="DIACHI" value="<?= $row['DIACHI']; ?>"><br><br>
  
  <label for="lname">SĐT:</label><br>
  <input type="number" name="SDT" value="<?= $row['SDT']; ?>"><br><br>
  
  <label for="lname">LƯƠNG:</label><br>
  <input type="number" name="LUONG" value="<?= $row['LUONG']; ?>"><br><br>
  
  <label class="form-label">ẢNH : </label><br>
  <?php if (!empty($row['IMAGE'])) : ?>
    <img src="<?= 'http://localhost/casestudy_M2/' . htmlspecialchars($row['IMAGE']); ?>" alt="<?= htmlspecialchars($row['HOVATEN']); ?>" style="max-width: 200px;">
  <?php endif; ?>
  <input type="file" name="IMAGE"><br><br>
  
  <input type="submit" value="SỬA ">
</form> 

</body>
</html>
<?php include '../includes/footer.php'?>
