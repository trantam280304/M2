<table class="user-details">
    <tr>
        <h3>Xem chi tiết sản phẩm</h3>
    </tr>
    <tr>
        <td>Tên danh mục:</td>
        <td><?= $row['name']; ?></td>
    </tr>
    <tr>
        <td>password:</td>
        <td><?= $row['password']; ?></td>
    </tr>
    <tr>
        <td>email:</td>
        <td><?= $row['email']; ?></td>
    </tr>
    <tr>
        <td>sdt:</td>
        <td><?= $row['phone']; ?></td>
    </tr>
    <tr>
        <td>Ảnh:</td>
        <td><img width="100" src="<?php echo ROOT_URL . $row['IMAGE']; ?>" alt=""></td>
    </tr>
</table>
<style>
    .user-details {
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .user-details h3 {
        margin-bottom: 10px;
    }

    .user-details td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .user-details td:first-child {
        font-weight: bold;
        background-color: #f2f2f2;
    }

    .user-details img {
        max-width: 100px;
        height: auto;
    }
</style>