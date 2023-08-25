<?php
include_once '../db.php';

$sql = "SELECT * FROM `loai_hangs`";
// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array

$rows = $stmt->fetchAll(); //[]
// Trả về dữ liệu
// xử lý tìm kiếm
if (isset($_GET['search'])) {
  $keyword = $_GET['search'];
  $sql = "SELECT * FROM loai_hangs WHERE TENLOAIHANG LIKE '%$keyword%'";
  $stmt = $conn->query($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $results = $stmt->fetchAll();
}



?>
  <?php include_once '../includes/header.php' ?>

  <!DOCTYPE html>
  <html>
  <head>
  <style>

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  button[type="submit"] {
    background-color: #333333;
    color: #ffffff;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
  }
  .custom-row, .search-row {
    background-color: #f2f2f2;
  }
  h2 {
    color: #333333;
    font-size: 24px;
    font-weight: bold;
  text-align: center;
    
  }
  .add-button {
    display: inline-block;
    padding: 10px 30px;
    background: linear-gradient(135deg, #0033FF	, #ee0979);
    color: #fff;
    text-decoration: none;
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
    margin-left: 20px;

  }

  .add-button:hover {
    transform: scale(1.05);
    
  }
  .form-container {
  margin-bottom: 20px;
}

.form-container input[type="text"] {
  width: 300px;
  padding: 8px;
}

.form-container button[type="submit"] {
  margin-left: 10px;
}
table {
    width: 90%;
    border-collapse: collapse;
    margin-top: 20px;
    color: #000;
      margin-left: 20px;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
  }
  th {
    background: linear-gradient(to bottom, #B0E0E6, #4876FF
);
    color: #333;
    font-weight: bold;
  }
  tr:nth-child(even) {
    background: #F9F9F9;
  }
  tr:hover {
    background: #ddd;
  }
  td a {
    color: #007BFF;
    text-decoration: none;
  }
  td a:hover {
    color: #0056B3;
  }

  .edit-button,
    .delete-button {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .edit-button:hover,
    .delete-button:hover {
      background-color: #45a049;
    }
    
    .delete-button {
      background-color: #f44336;
    }
    
    .delete-button:hover {
      background-color: #d32f2f;
    }
  </style>
  </head>
  <body>
  <div class="form-container">
  
</div>
  <h2>LIỆT KÊ LOẠI HÀNG</h2>
  <a href="create.php" class="add-button">Thêm mới</a><br>
  <br>
  <table>
    <tr>
      <th>STT</th>
      <th>TÊN LOẠI HÀNG</th>
      <th>ẢNH</th>
      <th>HÀNH ĐỘNG</th>
    </tr>
    
    <?php foreach ($rows as $r) : ?>
      <tr>
        <td><?php echo $r['MALOAIHANG']; ?></td>
        
        <td><?php echo $r['TENLOAIHANG']; ?></td>
      </td>
      <td><img width="100" src="<?php echo 'http://localhost/casestudy_M2/'. $r['IMAGE'];?>" alt=""> </td>

        <td>
          <a href="edit.php?id=<?php echo $r['MALOAIHANG']; ?>"class="edit-button">Sửa</a> 
          <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="delete.php?id=<?php echo $r['MALOAIHANG']; ?>" class="delete-button">Xóa</a>
        </td>
      </tr>
    <?php endforeach; ?>
    
    <?php if (!empty($results)) : ?>
      <style>
  .search-results {
    margin-top: 20px;
  }

  h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-left: 20px;
      color: #000;
  }

  .search-results table {
    color: #000;
    border-collapse: collapse;
    width: 90%;
      margin-left: 20px;
  }

  .search-results th, .search-results td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }

  .search-results th {
    background-color: #f2f2f2;
  }

  .search-results img {
    max-width: 90px;
    max-height: 90px;
  }

  .search-results a {
    margin-right: 4px;
  }
  .add-button1:hover {
  transform: scale(1.05);
}
.edit-button1,
    .delete-button1 {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .edit-button1:hover,
    .delete-button1:hover {
      background-color: #45a049;
    }
    
    .delete-button1 {
      background-color: #f44336;
    }
    
    .delete-button1:hover {
      background-color: #d32f2f;
    }
</style>
    <table>
      <tr>
        <th>STT</th>
        <th>TÊN  LOẠI HÀNG</th>
        <th>ẢNH</th>
        <th>HÀNH ĐỘNG</th>
      </tr>
      <?php foreach ($results as $result) : ?>
        <tr>
          <td><?php echo $result['MALOAIHANG']; ?></td>
          <td><?php echo $result['TENLOAIHANG']; ?></td>
        
          <td><img width="100" src="<?php echo 'http://localhost/casestudy_M2/' . $result['IMAGE']; ?>" alt=""></td>
          <td>
            <a href="edit.php?id=<?php echo $result['MALOAIHANG']; ?>"class="edit-button1">Sửa</a>  
            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="delete.php?id=<?php echo $result['MALOAIHANG']; ?>"class="delete-button1">Xóa</a>
          </td>
        </tr>
        <br>
      <?php endforeach; ?>
      <h3>KẾT QUẢ TÌM KIẾM :</h3>
    </table>
  <?php endif; ?>

  </table>

  </body>
  </html>
  <?php include_once '../includes/footer.php' ?>
