<?php
include_once 'db.php';

// Process search query
if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];

  // Prepare the SQL statement with a search condition
  $sql = "SELECT * FROM `benh_nhans` WHERE `MABENHNHAN` LIKE :searchTerm";

  // Truy vấn
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%');
  $stmt->execute(); // Execute the prepared statement
} else {
  // Default query without search condition
  $sql = "SELECT * FROM `benh_nhans`";

  // Truy vấn
  $stmt = $conn->query($sql);
}

// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);

// Trả về dữ liệu
$rows = $stmt->fetchAll();
?>



<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    
    h2 {
      text-align: center;
      color: #363636;
    }
    
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .search-form {
      display: flex;
      align-items: center;
    }
    
    .search-input {
      padding: 5px;
      width: 200px;
      margin-right: 10px;
    }
    
    .search-button {
      padding: 5px 10px;
      background-color: #FFE4B5;
      color: #fff;
      border: none;
      cursor: pointer;
    }
    
    a {
      text-decoration: none;
      color: #333;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
    }
    
    th {
      background-color: #333;
      color: #fff;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    .pagination {
      margin-top: 20px;
    }
    
    .pagination a {
      display: inline-block;
      padding: 8px 16px;
      text-decoration: none;
      color: #333;
      border: 1px solid #ddd;
    }
    
    .pagination a.active {
      background-color: #333;
      color: #fff;
      border: 1px solid #333;
    }
    .add-button {
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(135deg, #ff6a00, #ee0979);
  color: #fff;
  text-decoration: none;
  border-radius: 30px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
}

.add-button:hover {
  transform: scale(1.05);
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
   <h2>Liệt kê mặt hàng</h2>
   <div class="header">
  <a href="benh_nhans/create.php" class="add-button">Thêm</a>
  <form action="" method="GET">
  <input type="text" name="search" placeholder="Nhập tên bạn cần tìm" value="<?php echo htmlentities($searchTerm); ?>">
  <input type="submit" value="Tìm kiếm">
</form>
</div>
  
</head>
<body>
 
  
  <table>
    <tr>
      <th>STT</th>
      <th>Tên hàng</th>
      <th>Mã công ty</th>
      <th>Mã loại hàng</th>
      <th>Số lượng</th>
      <th>Đơn vị</th>
      <th>Giá</th>
      <th>Hành động</th>
    </tr>
    <?php foreach($rows as $r) : ?>
      <tr>
        <td><?php echo $r['MAHANG']; ?></td>
        <td><?php echo $r['TENHANG']; ?></td>
        <td><?php echo $r['MACONGTY']; ?></td>
        <td><?php echo $r['MALOAIHANG']; ?></td>
        <td><?php echo $r['SOLUONG']; ?></td>
        <td><?php echo $r['DONVITINH']; ?></td>
        <td><?php echo $r['GIAHANG']; ?></td>
        <td>
        <a href="edit.php?id=<?php echo $r['MAHANG']; ?>" class="edit-button">Sửa</a> 
          <a onclick="return confirm('Are you sure?');" href="delete.php?id=<?php echo $r['MAHANG']; ?>" class="delete-button">Xóa</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>