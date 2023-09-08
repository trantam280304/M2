<h2 class="h2">DANH SÁCH BỆNH NHÂN</h2>
<div class="container">
    <a class="add-link" href="index.php?action=create">Thêm mới</a><br></br>
    <form action="index.php?controller=user&action=index" method="get" enctype="multipart/form-data">
        <input type="text" name="search" placeholder="Nhập tên...">
        <input type="submit" value="Tìm kiếm">
        <table>
            <tr>
                <th>Mã bệnh nhân</th>
                <th>Tên bệnh nhân</th>
                <th>Phòng</th>
                <th>Hành động</th>
            </tr>

            <!-- Bắt đầu lặp -->
            <?php foreach ($items as $r) : ?>
                <tr>
                    <td><?php echo $r['MABENHNHAN']; ?></td>
                    <td><?php echo $r['TENBENHNHAN']; ?></td>
                    <td><?php echo $r['PHONG']; ?></td>

                    <td>
                        <a href="index.php?action=edit&id=<?php echo $r['MABENHNHAN']; ?>" class="edit">Sửa</a>
                        <a href="index.php?action=show&id=<?php echo $r['MABENHNHAN']; ?>" class="show">Xem</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xóa không ?');" href="index.php?action=destroy&id=<?php echo $r['MABENHNHAN']; ?>" class="delete">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <!-- Kết thúc vòng lặp -->
        </table>
</div>

<style>
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

    .edit {
        color: #E0FFFF;
        /* Màu cho liên kết Sửa */
        background-color: #32CD32;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
    }

    .show {
        color: #00FF00;
        /* Màu cho liên kết Xem */
        background-color: #1E90FF;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
    }

    .delete {
        color: #FFF5EE;
        /* Màu cho liên kết Xóa */
        background-color: #800000;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
    }

    .edit:hover,
    .show:hover,
    .delete:hover {
        background-color: #f5f5f5;
        /* Màu nền khi di chuột qua */
    }

    h2 {
        text-align: center;
    }
</style>