<?php 
include_once '../db.php';
$sql = "SELECT * FROM loai_hangs";
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

  $TENHANG = $_REQUEST['TENHANG'];
  $TENCONGTY = $_REQUEST['TENCONGTY'];
  $MALOAIHANG = $_REQUEST['MALOAIHANG'];
  $SOLUONG = $_REQUEST['SOLUONG'];
  $DONVITINH = $_REQUEST['DONVITINH'];
  $GIA = $_REQUEST['GIA'];
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
  
  $sql = "INSERT INTO `mathangs` 
  ( `TENHANG`, `TENCONGTY`, `MALOAIHANG`, `SOLUONG`,`DONVITINH`,`GIA`,`IMAGE`)
  VALUES 
  ('$TENHANG','$TENCONGTY','$MALOAIHANG', '$SOLUONG','$DONVITINH','$GIA','$image')";
   //Thuc hien truy van
  $conn->exec($sql);

  // chuyen huong ve trang danh sach
  header("Location: index.php");

}

?>
<?php include '../includes/header.php'?>
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
    color: #191970;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 16px;
  text-align: center;
  font-family: "Roboto", Arial, sans-serif;
  }
  form {
    width: 400px;
    margin: 20px;
  }

  label {
color: #0000EE;
font-weight: bold;
 
  }

  input[type="text"],
input[type="number"],
select {
  width: 300%;
  padding: 8px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>


<!DOCTYPE html>
<html>
<body>

<h2>THÊM MẶT HÀNG</h2>

<form action="" method="POST"enctype="multipart/form-data">
  <label for="fname">Tên hàng :</label>
  <input type="text" name="TENHANG" required>
  <label for="lname">Công ty:</label><br>
  <input type="text"  name="TENCONGTY" required>

  <label for="lname">Tên loại hàng : </label><br>

                        <select name="MALOAIHANG">
                          <?php foreach ($rows as $row): ?>
                            <option value="<?php echo $row['MALOAIHANG']; ?>"><?php echo $row['TENLOAIHANG']; ?></option>
                          <?php endforeach;?>
                        </select><br><br>

  <label for="lname">Số lượng:</label><br>
  <input type="number"name="SOLUONG" required>
  <label for="lname">Đơn vị :</label><br>
  <input type="text"name="DONVITINH" required>
  <label for="lname">Giá hàng :</label><br>
  <input type="number"name="GIA"required>
  <label for="image">Ảnh :</label><br>
<input type="file" name="IMAGE"required><br><br>
  <input type="submit" value="THÊM MỚI">
</form> 



</body>
</html>

<?php include '../includes/footer.php'?>
