<?php
include_once '../db.php';

$sql_loai_hangs = "SELECT * FROM `loai_hangs`";
$stmt_loai_hangs = $conn->query($sql_loai_hangs);
$stmt_loai_hangs->setFetchMode(PDO::FETCH_ASSOC);
$rows_loai_hangs = $stmt_loai_hangs->fetchAll();
// xử lý tìm kiếm 
if( isset( $_GET["search"] )  ){
  $s = $_GET["search"];
  $sql .= " WHERE qltv.TENSACH LIKE '%$s%'";
}

// sửa
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if (!$id) {
    header("Location: index.php");
}

$sql_mathang = "SELECT * FROM `mathangs` WHERE MAHANG = $id";
$stmt_mathang = $conn->query($sql_mathang);
$stmt_mathang->setFetchMode(PDO::FETCH_ASSOC);
$row_mathang = $stmt_mathang->fetch();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $TENHANG = $_POST['TENHANG'];
    $TENCONGTY = $_POST['TENCONGTY'];
    $MALOAIHANG = $_POST['MALOAIHANG'];
    $SOLUONG = $_POST['SOLUONG'];
    $DONVITINH = $_POST['DONVITINH'];
    $GIA = $_POST['GIA'];

    // xử lý ảnh
    $name = $_REQUEST['name'];
    $country = $_REQUEST['country'];
    $image = '';
  
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // ...
      $image = $row_mathang['IMAGE'];
  
      if (isset($_FILES['IMAGE']) && $_FILES['IMAGE']['error'] === 0) {
        $uploadDir = ROOT_DIR . '/public/uploads/';
        $uploadFile = $uploadDir . basename($_FILES['IMAGE']['name']);
  
        if (move_uploaded_file($_FILES['IMAGE']['tmp_name'], $uploadFile)) {
          $image = '/public/uploads/' . $_FILES['IMAGE']['name'];
        }
      }
    }

    $sql_update = "UPDATE `mathangs` SET `IMAGE` = '$image', `TENHANG` = '$TENHANG', `GIA` = $GIA, `SOLUONG` = $SOLUONG, `DONVITINH` = '$DONVITINH', `TENCONGTY` = '$TENCONGTY', `MALOAIHANG` = '$MALOAIHANG' WHERE `MAHANG` = $id";
    $conn->exec($sql_update);

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
  text-align: center;
  margin-bottom: 20px;
  color: #000;
}

form {
 width: 1200px;
    margin: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #000;
}

input[type="text"],
input[type="number"],
select {
  width: 90%;
  padding: 8px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 15px;
  box-sizing: border-box;
}

input[type="file"] {
  margin-top: 8px;
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
<h2>SỬA MẶT HÀNG</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="fname">Tên hàng :</label><br>
    <input type="text" name="TENHANG" value="<?= $row_mathang['TENHANG']; ?>">

    <label for="lname">Tên công ty :</label><br>
    <input type="text" name="TENCONGTY" value="<?= $row_mathang['TENCONGTY']; ?>">
    <label for="lname">Tên loại hàng :</label><br>

    <select name="MALOAIHANG">
        <?php foreach ($rows_loai_hangs as $row_loai_hang) : ?>
            <option value="<?php echo $row_loai_hang['MALOAIHANG']; ?>" <?php if ($row_loai_hang['MALOAIHANG'] == $row_mathang['MALOAIHANG']) echo "selected"; ?>>
                <?php echo $row_loai_hang['TENLOAIHANG']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="lname">Số lượng :</label><br>
    <input type="number" name="SOLUONG" value="<?= $row_mathang['SOLUONG']; ?>">
    <label for="lname">Đơn vị tính :</label><br>
    <input type="text" name="DONVITINH" value="<?= $row_mathang['DONVITINH']; ?>">
    <label for="lname">Giá hàng :</label><br>
    <input type="number" name="GIA" value="<?= $row_mathang['GIA']; ?>">

    <label class="form-label">ẢNH</label>

    <?php if (!empty($row_mathang['IMAGE'])) : ?>
  <img src="<?= 'http://localhost/casestudy_M2/' . htmlspecialchars($row_mathang['IMAGE']); ?>" alt="<?= htmlspecialchars($row_mathang['TENHANG']); ?>" style="max-width: 200px;">
<?php endif; ?>
  <input type="file" name="IMAGE"><br><br>

    <input type="submit" value="LƯU">
</form>

<?php include '../includes/footer.php'?>
