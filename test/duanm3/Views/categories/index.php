<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<a href="index.php?action=create" class="add-link">Thêm mới</a><br></br>


<table class="my-table">
    <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>
    <form action="index.php?action=store" method="get">
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
            <td><?php echo $r['description']; ?></td>
            <td><img width="100" src="<?php echo 'http://localhost/test/duanm3/' . $r['IMAGE']; ?>" alt=""> </td>


            <td>
                <a href="index.php?action=edit&id=<?php echo $r['id']; ?>" class="edit-link">Sửa</a>
                <a href="index.php?action=show&id=<?php echo $r['id']; ?>" class="view-link">Xem</a>
                <a onclick="return confirm('Bạn có muốn xóa không ?');" href="index.php?action=destroy&id=<?php echo $r['id']; ?>" class="delete-link">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <!-- Kết thúc vòng lặp -->
</table>

<style>
    .my-table {
        width: 50%;
        border-collapse: collapse;
    }

    .my-table th,
    .my-table td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ccc;
    }

    .my-table th {
        background-color: #f2f2f2;
    }

    .my-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .my-table a {
        text-decoration: none;
        color: #333;
    }

    .my-table a:hover {
        color: #ff0000;
    }

    .add-link {
        margin-left: 5px;

        display: inline-block;
        padding: 8px 16px;
        background: linear-gradient(135deg, #0033FF, #ee0979);
        color: white;
        text-decoration: none;
        border-radius: 15px;
    }

    .add-link:hover {
        background-color: #45a049;
        opacity: 0.5;

    }

    .edit-link,
    .view-link,
    .delete-link {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
    }

    .edit-link {
        background-color: #45a049;
    }

    .view-link {
        background-color: #66CCFF;
        color: white;
    }

    .delete-link {
        background-color: #FF0000;
        color: white;
    }

    .edit-link:hover,
    .view-link:hover,
    .delete-link:hover {
        opacity: 0.5;
    }
</style>
<style>
    .my-table {
        width: 50%;
        border-collapse: collapse;
    }

    .my-table th,
    .my-table td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ccc;
    }

    .my-table th {
        background-color: #f2f2f2;
    }

    .my-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .my-table a {
        text-decoration: none;
        color: #333;
    }

    .my-table a:hover {
        color: #ff0000;
    }

    .add-link {
        margin-left: 5px;

        display: inline-block;
        padding: 8px 16px;
        background: linear-gradient(135deg, #0033FF, #ee0979);
        color: white;
        text-decoration: none;
        border-radius: 15px;
    }

    .add-link:hover {
        background-color: #45a049;
        opacity: 0.5;

    }

    .edit-link,
    .view-link,
    .delete-link {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
    }

    .edit-link {
        background-color: #45a049;
    }

    .view-link {
        background-color: #66CCFF;
        color: white;
    }

    .delete-link {
        background-color: #FF0000;
        color: white;
    }

    .edit-link:hover,
    .view-link:hover,
    .delete-link:hover {
        opacity: 0.5;
    }

    /* Thêm CSS cho biểu tượng tìm kiếm */
    .search-container {
        position: relative;
        margin-bottom: 20px;
    }

    .search-container input[type="text"] {
        width: 40%;
        padding: 8px;
        border: 1px solid #ccc
 
    }
    .search-button i {
        color: #555;
        font-size: 25px;
    }  
    .search-button {
    display: inline-block;
    margin-left: 10px;
    vertical-align: middle;
}

    /* Nếu bạn chưa bao gồm Font Awesome trong trang của mình */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
</style>
<style>
    .card-footer {
        display: flex;
        justify-content: left;
        align-items: left;
        margin-top: 20px;
    }

    .pagination {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-link {
        display: inline-block;
        padding: 5px 10px;
        margin: 1px;
        color: #333;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .page-link.active {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .page-link:hover {
        background-color: #eee;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        opacity: 1;
        transition: opacity 1s ease-in-out;
        max-width: 700px;
        /* Đặt chiều dài tối đa của thông báo thành công */
    }

    .success-message.hidden {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
</style>

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