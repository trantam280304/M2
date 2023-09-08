<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<table border="1">

    <!-- Kết thúc vòng lặp -->
</table>
<style>
    /* Table styles */
 
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1px;
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
        background: linear-gradient(to bottom,  #FFFFFF, #D3D3D3);
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

    img {
        max-width: 90px;
        max-height: 90px;
    }

    /* Link styles */
    .edit-link,
    .view-link,
    .delete-link {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 3px;
        color: #fff;
        text-decoration: none;
    }

    .edit-link {
        background-color: #4CAF50;
    }

    .edit-link:hover {
        background-color: #45a049;
    }

    .view-link {
        background-color: #2196F3;
    }

    .view-link:hover {
        background-color: #1976D2;
    }

    .delete-link {
        background-color: #f44336;
    }

    .delete-link:hover {
        background-color: #d32f2f;
    }

    /* Link styles */
    .create-link {
        display: inline-block;
        padding: 13px 30px;
        background: linear-gradient(to bottom, #0000FF, #CD5C5C);
        color: #fff;
        text-decoration: none;
        border-radius: 15px;
        margin-top: 10px;
        font-size: 14px;
    }

    .create-link:hover {
        background-color: #B247D6;
    }

    /* Thêm CSS cho biểu tượng tìm kiếm */

    /* Nếu bạn chưa bao gồm Font Awesome trong trang của mình */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    .card-footer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pagination a {
        display: inline-block;
        padding: 8px 12px;
        margin-right: 5px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
    }

    .pagination a:hover {
        background-color: #f2f2f2;
    }
</style>

<!-- <div class="main-panel">
    <div class="content-wrapper"> -->
<?php
// Kiểm tra xem có thông báo thành công hay không
if (isset($successMessage)) {
    echo '<script>
            Swal.fire({
                title: "<h6>THÊM THÀNH CÔNG !</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
                
                
            });
          </script>';
} else if (isset($successMessage1)) {
    echo '<script>
            Swal.fire({
                title: "<h6>CẬP NHẬT THÀNH CÔNG !</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
            });
          </script>';
} else if (isset($successMessage2)) {
    echo '<script>
            Swal.fire({
                title: "<h6>XÓA THÀNH CÔNG !</h6>",
                icon: "success",
                showConfirmButton: false,
                timer: 2000,
                width: "300px"
            });
          </script>';
}
?>
<!-- CSS -->
<style>
    /* Tùy chỉnh popup */
    .custom-popup-class {
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    /* Tùy chỉnh tiêu đề */
    .custom-title-class {
        font-size: 20px;
        color: #333;
    }

    /* Tùy chỉnh biểu tượng */
    .custom-icon-class {
        width: 40px;
        height: 40px;
        color: #4CAF50;
        /* Màu xanh dương tương tự như biểu tượng thành công */
    }

    .search-container {
        float: right;
        margin-bottom: 10px;
    }

    /* Adjust search input field */
    .search-container input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 15px;
        margin-right: 5px;
        font-size: 14px;
    }

    /* Adjust search button */
    .search-container .search-button {
        padding: 8px 12px;
        background-color: #8B8B7A;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    /* Adjust search button icon */
    .search-container .search-button i {
        margin-right: 5px;
    }

    .h1 {
    font-size: 30px;
    color: #333;
    margin-bottom: 25px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<h1 class="h1">DANH MỤC SẢN PHẨM </h1>
<a href="index.php?action=create" class="create-link">THÊM MỚI</a><br></br>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <form action="index.php?action=store" method="get" enctype="multipart/form-data">
                    <div class="search-container">
                        <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm....">
                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>

                        </button>
                    </div>
                </form>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>TÊN</th>
                        <th>GIÁ </th>
                        <th>SỐ LƯƠNG TỒN KHO</th>
                        <th>ẢNH</th>
                        <th>TRẠNG THÁI</th>
                        <th>TÊN LOẠI HÀNG </th>
                        <th>TÊN THƯƠNG HIÊU </th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                    <form action="index.php?action=store" method="get">
                        <div class="search-container">


                            <!-- Bắt đầu lặp -->
                            <?php foreach ($data['products'] as  $r) : ?>

                                <tr>
                                <td><?php echo $r['id']; ?></td>
                                    <td><?php echo $r['name']; ?></td>
                                    <td><?php echo $r['price']; ?></td>
                                    <td><?php echo $r['quantity']; ?></td>
                                    <td><img width="100" src="<?php echo 'http://localhost/CaseStudy_M3/' . $r['IMAGE']; ?>" alt=""></td>
                                    <td>
                                        <?php
                                        if ($r['status'] == 0) {
                                            echo 'Hết hàng';
                                        } else {
                                            echo 'Còn hàng';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $r['category_name']; ?></td>
                                    <td><?php echo $r['brand_name']; ?></td>
                                    <td>
                                        <a href="index.php?action=edit&id=<?php echo $r['id']; ?>" class="edit-link">SỬA</a>
                                        <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="view-link">XEM</a>
                                        <a onclick="return confirm('Bạn có muốn xóa không ?');" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" class="delete-link">XÓA</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer">
    <nav class="pagination">
        <?php
        // hiển thị phân trang
        $visible_pages = min($total_pages, 2);
        $start_page = max(1, $current_page - 1);
        $end_page = min($start_page + $visible_pages - 1, $total_pages);
        ?>

        <?php if ($current_page > 1) : ?>
            <a class="page-link" href="index.php?page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
                <span aria-hidden="true">&laquo;</span>
            </a>
        <?php endif; ?>

        <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
            <?php if ($i == $current_page) : ?>
                <a class="page-link active" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php else : ?>
                <a class="page-link" href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($current_page < $total_pages) : ?>
            <a class="page-link" href="index.php?page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
                <span aria-hidden="true">&raquo;</span>
            </a>
        <?php endif; ?>
    </nav>
</div>