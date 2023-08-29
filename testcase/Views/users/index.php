<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<a href="index.php?action=create" class="add-link">Thêm mới</a><br></br>


<table class="my-table">
    <tr>
        <th>STT</th>
        <th>Tên </th>
        <th>Mật khẩu</th>
        <th>SDT</th>
        <th>Email</th>
        <th>Ảnh</th>
        <th>Hanh dong</th>
    </tr>
    <form action="index.php?action=store" method="get" enctype="multipart/form-data">
        <div class="search-container">
            <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
            <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
    
            </button>
        </div>
    </form>
    <!-- Bắt đầu lặp -->
    <?php foreach ($items as $r) : ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['password']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['phone']; ?></td>
            <td><img width="100" src="<?php echo 'http://localhost/testcase/' . $r['IMAGE']; ?>" alt=""> </td>



            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>" class="edit-link">Sửa</a>
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="view-link">Xem</a>
                <a onclick="return confirm('Bạn có muốn xóa không ?');" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" class="delete-link">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <!-- Kết thúc vòng lặp -->
</table>
<div class="card-footer">
    <nav class="pagination">
        <?php
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
<script>
    // Ẩn thông báo sau 1 giây
    setTimeout(function() {
        var successMessage = document.querySelector('.success-message');
        if (successMessage) {
            successMessage.classList.add('hidden');
        }

    }, 2000);
</script>

<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <?php if ($successMessage !== '') : ?>
            <div class="success-message">
                <i class="fas fa-check-circle"></i>
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<style>


    /* Các phần tử chung */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Đường viền và khoảng cách giữa các ô trong bảng */
    table.my-table {
        border-collapse: collapse;
        width: 100%;
    }

    table.my-table th,
    table.my-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    /* Ô chứa nút tìm kiếm */
    .search-container {
        margin-bottom: 20px;
    }

    .search-container input[type="text"] {
        padding: 5px;
        border: none;
        border-radius: 3px;
    }

    .search-button {
        padding: 6px 10px;
        background-color: #4CAF50;
        border: none;
        color: white;
        border-radius: 3px;
        cursor: pointer;
    }

    /* Các liên kết Sửa, Xem, Xóa */
    .edit-link,
    .view-link,
    .delete-link {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 5px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 3px;
    }

    .edit-link:hover,
    .view-link:hover,
    .delete-link:hover {
        background-color: #45a049;
    }

    /* Phân trang */
    .pagination {
        display: flex;
        justify-content: center;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .pagination a.active {
        background-color: #4CAF50;
        color: white;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }

    /* Thẻ div chứa thông báo thành công */
    .success-message {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        margin-top: 30px; /* Thay đổi margin-bottom thành margin-top */
        /* Thêm các thuộc tính để điều chỉnh hiển thị */
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        border-radius: 5px;
    }
    .hidden {
        display: none;
    }

    /* Kiểu cho liên kết "Thêm mới" */
    .add-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 3px;
        font-weight: bold;
    }

    .add-link:hover {
        background-color: #45a049;
    }

    /* Cách xa bảng */
    .table-spacing {
        margin-bottom: 30px;
    }

    /* Kiểu cho phân trang */
    .pagination-spacing {
        margin-bottom: 30px;
    }
 
</style>
