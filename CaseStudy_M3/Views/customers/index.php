<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    form {
        margin: 20px 0;
    }


    /* Table */
    table {
        width: 100%;
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
        background: linear-gradient(to bottom, #FFFFFF, #D3D3D3);
        color: #333;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background: #F9F9F9;
    }

    tr:hover {
        background-color: #E6E6E6;
        transition: background-color 0.3s;
    }

    tr:hover td {
        transform: scale(1.1);
        transition: transform 0.3s;
    }

    td a {
        color: #007BFF;
        text-decoration: none;
    }

    td a:hover {
        color: #0056B3;
    }

    .action-column a {
        display: inline-block;
        margin-right: 5px;
        text-decoration: none;
        color: #000;
        padding: 2px 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .action-column a:hover {
        background-color: #f5f5f5;
    }


    .action-column a.edit {
        color: #E0FFFF;
        /* Màu cho liên kết Sửa */
        background-color: #32CD32
    }

    .action-column a.show {
        color: #00FF00;
        /* Màu cho liên kết Xem */
        background-color: #1E90FF
    }

    .action-column a.delete {
        color: #FFF5EE;
        /* Màu cho liên kết Xóa */
        background-color: #800000
    }

    .action-column a:hover {
        background-color: #f5f5f5;
    }

  
    .add-link {
        margin-left: 20px;
        display: inline-block;
        padding: 8px 26px;
        background: linear-gradient(135deg, #0033FF, #ee0979);
        color: white;
        text-decoration: none;
        border-radius: 15px;

    }

    .add-link:hover {
        background-color: #45a049;
    }

    .add-button:hover {
        transform: scale(1.05);
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .page-link {
        display: inline-block;
        padding: 8px 12px;
        margin: 0 4px;
        color: #333;
        text-decoration: none;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .page-link.active {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .page-link:hover {
        background-color: #f4f4f4;
    }
    .search-container {
        margin-top: 10px;
        display: flex;
        justify-content: flex-end;
    }

    .search-container input[type="text"] {
        padding: 5px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 14px;
    }

    .search-container button {
        padding: 5px 10px;
        background-color: #8B8B7A;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .search-container button:hover {
        background-color: #0056b3;
    }
    .h3{
text-align: center;
    }
</style>

<h3 class ='h3'>DANH SÁCH KHÁCH HÀNG</h3>
<a class="add-link" href="index.php?controller=customer&action=create">Thêm mới</a><br></br>

<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
        <form action="index.php?controller=customer&action=index" method="get">
                <div class="search-container">

                    <input type="hidden" name="controller" value="customer">
                    <input type="hidden" name="action" value="index">

                    <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
                    <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <form action="index.php?controller=category&action=index" method="get">
                <div class="search-container">
                    
                    <table border="1">
                        <tr>
                            <th>STT</th>
                            <th>TÊN KHÁCH HÀNG </th>
                            <th>ĐỊA CHỈ</th>
                            <th>SDT </th>
                            <th>HÀNH ĐỘNG</th>
                        </tr>

                    

                        <!-- Bắt đầu lặp -->
                        <?php foreach ($items as $r) : ?>
                            <tr>
                                <td><?php echo $r['id']; ?></td>
                                <td><?php echo $r['name']; ?></td>
                                <td><?php echo $r['address']; ?></td>
                                <td><?php echo $r['phone']; ?></td>
                                <td class="action-column">
                                    <a class="edit" href="index.php?controller=customer&action=edit&id=<?php echo $r['id']; ?>">Sửa</a>
                                    <a class="show" href="index.php?controller=customer&action=show&id=<?php echo $r['id']; ?>">Xem</a>
                                    <a class="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?');" href="index.php?controller=customer&action=destroy&id=<?php echo $r['id']; ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <?php
    // Kiểm tra xem có thông báo thành công hay không
    if (isset($successMessage)) {
        echo '<script>
            Swal.fire({
                title: "<h6>THÊM THÀNH CÔNG!</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
            });
          </script>';
    } else if (isset($successMessage1)) {
        echo '<script>
            Swal.fire({
                title: "<h6>CẬP NHẬT THÀNH CÔNG!</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
            });
          </script>';
    } else if (isset($successMessage2)) {
        echo '<script>
            Swal.fire({
                title: "<h6>XÓA THÀNH CÔNG!</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
            });
          </script>';
    }
    ?>
    <div class="card-footer">
        <nav class="pagination">
            <?php
            // phân trang 
            $visible_pages = min($total_pages, 2);
            $start_page = max(1, $current_page - 1);
            $end_page = min($start_page + $visible_pages - 1, $total_pages);
            ?>

            <?php if ($current_page > 1) : ?>
                <a class="page-link" href="index.php?controller=customer&page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            <?php endif; ?>

            <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                <?php if ($i == $current_page) : ?>
                    <a class="page-link active" href="index.php?controller=customer&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php else : ?>
                    <a class="page-link" href="index.php?controller=customer&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages) : ?>
                <a class="page-link" href="index.php?controller=customer&page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            <?php endif; ?>
        </nav>
    </div>