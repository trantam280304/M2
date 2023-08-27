<a href="index.php?action=create" class="add-link">Thêm mới</a><br></br>
<table class="my-table">
    <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>

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
</style>