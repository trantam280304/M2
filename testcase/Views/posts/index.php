<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<a href="index.php?action=create" class="create-link">Them moi</a><br></br>

<table border="1">
    <tr>
        <th>STT</th>
        <th>email:</th>
        <th>Tiêu đề</th>
        <th>Nội dung:</th>
        <th>ACTION</th>
    </tr>
    <form action="index.php?action=store" method="get">
        <div class="search-container">
            <input type="text" name="search" placeholder="Nhập từ khóa tìm kiếm">
            <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
    
    <!-- Bắt đầu lặp -->
    <?php foreach ($data['posts'] as $r) : ?>

        <tr>
        <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['title']; ?></td>
            <td><?php echo $r['content']; ?></td>
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
    /* Table styles */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Link styles */
    .edit-link, .view-link, .delete-link {
        display: inline-block;
        padding: 5px 10px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
    }

    .edit-link:hover, .view-link:hover, .delete-link:hover {
        background-color: #45a049;
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
        padding: 5px 10px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
    }

    .create-link:hover {
        background-color: #45a049;
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