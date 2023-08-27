<table class="product-details">
    <tr>
        <h3>Xem chi tiết sản phẩm</h3>
    </tr>
    <tr>
        <td>Tên danh mục:</td>
        <td><?= $row['name'];?></td>
    </tr>
    <tr>
        <td>Mô tả:</td>
        <td><?= $row['description'];?></td>
    </tr><tr>
        <td>Ảnh:</td>
        <td><img width="100" src="<?php echo ROOT_URL . $row['IMAGE']; ?>" alt=""></td></tr>
</table>
<style>
  
    .product-details {
    width: 50%;
    border-collapse: collapse;
}

.product-details h3 {
    text-align: center;
    margin-bottom: 0px;
}

.product-details tr:nth-child(even) {
    background-color: #f2f2f2;
}

.product-details td {
    padding: 10px;
    border: 1px solid #ccc;
}

.product-details td:first-child {
    font-weight: bold;
}
</style>