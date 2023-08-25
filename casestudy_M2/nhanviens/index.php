<?php
include_once '../db.php';

$record_per_page = 3;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $record_per_page;
$sql = "SELECT * FROM `nhanviens`";
$sql_count = "SELECT COUNT(MANHANVIEN) as total FROM nhanviens";
$stmt_count = $conn->query($sql_count);
$stmt_count->setFetchMode(PDO::FETCH_ASSOC);
$row_count = $stmt_count->fetch();
$total_records = $row_count['total'];
$total_pages = ceil($total_records / $record_per_page);
$sql .= " LIMIT $record_per_page OFFSET $offset";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();

// $sql = "SELECT * FROM `nhanviens`";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_ASSOC);
// $rows = $stmt->fetchAll();

$results = array();
// tìm kiếm
if (isset($_GET['search'])) {
  $keyword = $_GET['search'];
  $sql = "SELECT * FROM nhanviens WHERE HOVATEN LIKE '%$keyword%'";
  $stmt = $conn->query($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $results = $stmt->fetchAll();
}


?>
<?php include '../includes/header.php' ?>

<!DOCTYPE html>
<html>

<head>
  <style>
    form {
      margin: 20px 0;
    }

    h2 {
      text-align: center;
      color: #000;
    }

    /* Table */
    table {
      width: 90%;
      border-collapse: collapse;
      margin-top: 20px;
      color: #000;
      margin-left: 20px;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background: linear-gradient(to bottom, #B0E0E6, #4876FF);
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

    img {
      max-width: 90px;
      max-height: 90px;
    }

    .add-link {
      margin-left: 20px;

      display: inline-block;
      padding: 8px 16px;
      background: linear-gradient(135deg, #0033FF, #ee0979);
      color: white;
      text-decoration: none;
      border-radius: 20px;
    }

    .add-link:hover {
      background-color: #45a049;
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
      border-radius: 10px;
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


  <h2>LIỆT KÊ NHÂN VIÊN</h2>
  <a href="create.php" class="add-link">Thêm mới</a>
  <br><br>
  <table>
    <tr>
      <th>STT</th>
      <th>HỌ VÀ TÊN</th>
      <th>GIỚI TÍNH</th>
      <th>NGÀY SINH</th>
      <th>NGÀY NHẬP VIỆC</th>
      <th>ĐỊA CHỈ</th>
      <th>SĐT</th>
      <th>LƯƠNG</th>
      <th>ẢNH</th>
      <th>HÀNH ĐỘNG</th>
    </tr>

    <?php foreach ($rows as $r) : ?>
      <tr>
        <td><?php echo $r['MANHANVIEN']; ?></td>
        <td><?php echo $r['HOVATEN']; ?></td>
        <td><?php echo $r['GIOITINH']; ?></td>
        <td><?php echo $r['NGAYSINH']; ?></td>
        <td><?php echo $r['NGAYNHAPVIEC']; ?></td>
        <td><?php echo $r['DIACHI']; ?></td>
        <td><?php echo $r['SDT']; ?></td>
        <td><?php echo $r['LUONG']; ?></td>
        <td><img width="100" src="<?php echo 'http://localhost/casestudy_M2/' . $r['IMAGE']; ?> " alt=""> </td>
        <td>
          <a href="edit.php?id=<?php echo $r['MANHANVIEN']; ?>" class="edit-button">Sửa</a>
          <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="delete.php?id=<?php echo $r['MANHANVIEN']; ?>" class="delete-button">Xóa</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <br>
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
        color: #00008B;
      }

      .search-results table {
        color: #000;
        border-collapse: collapse;
        width: 90%;
        margin-left: 20px;
      }

      .search-results th,
      .search-results td {
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
    <h3>KẾT QUẢ TÌM KIẾM:</h3>

    <table>
      <tr>
        <th>HỌ VÀ TÊN</th>
        <th>GIỚI TÍNH</th>
        <th>NGÀY SINH</th>
        <th>NGÀY NHẬP VIỆC</th>
        <th>ĐỊA CHỈ</th>
        <th>SĐT</th>
        <th>LƯƠNG</th>
        <th>ẢNH</th>
        <th>HÀNH ĐỘNG</th>
      </tr>
      <?php foreach ($results as $result) : ?>
        <tr>
          <td><?php echo $result['HOVATEN']; ?></td>
          <td><?php echo $result['GIOITINH']; ?></td>
          <td><?php echo $result['NGAYSINH']; ?></td>
          <td><?php echo $result['NGAYNHAPVIEC']; ?></td>
          <td><?php echo $result['DIACHI']; ?></td>
          <td><?php echo $result['SDT']; ?></td>
          <td><?php echo $result['LUONG']; ?></td>
          <td><img width="100" src="<?php echo 'http://localhost/casestudy_M2/' . $result['IMAGE']; ?>" alt=""></td>
          <td>
            <a href="edit.php?id=<?php echo $result['MANHANVIEN']; ?>" class="edit-button1">Sửa</a>
            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="delete.php?id=<?php echo $result['MANHANVIEN']; ?>" class="delete-button1">Xóa</a>
          </td>
        </tr>
      <?php endforeach; ?>

    </table>
  <?php endif; ?>
</body>
<div class="card-footer">
  <nav class="pagination">
    <?php
    $visible_pages = min($total_pages, 2);
    $start_page = max(1, $current_page - 1);
    $end_page = min($start_page + $visible_pages - 1, $total_pages);
    ?>

    <?php if ($current_page > 1) : ?>
      <a class="page-link" href="http://localhost/casestudy_M2/nhanviens/index.php?page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
        <span aria-hidden="true">&laquo;</span>
      </a>
    <?php endif; ?>

    <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
      <?php if ($i == $current_page) : ?>
        <a class="page-link active" href="http://localhost/casestudy_M2/nhanviens/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php else : ?>
        <a class="page-link" href="http://localhost/casestudy_M2/nhanviens/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages) : ?>
      <a class="page-link" href="http://localhost/casestudy_M2/nhanviens/index.php?page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
        <span aria-hidden="true">&raquo;</span>
      </a>
    <?php endif; ?>
  </nav>
</div>
<style>
  .card-footer {
  overflow-x: auto;
  display: flex;
  justify-content: center; /* Căn giữa phần phân trang */
}

.pagination {
  display: flex;
  justify-content: center; /* Căn giữa các phần tử phân trang */
}

.pagination-list {
  list-style: none;
  display: flex;
  justify-content: center;
  padding: 0;
  margin: 0;
}

.pagination-list .page-link {
  /* CSS cho các nút phân trang */
}

.pagination-list .page-link.active {
  /* CSS cho nút phân trang hiện tại */
}
</style>

</html>

<?php include '../includes/footer.php' ?>