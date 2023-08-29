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