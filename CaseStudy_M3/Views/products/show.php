<table class="user-details">
    <tr>
        <h3>XEM CHI TIẾT SẢN PHẨM</h3>
    </tr>
    <tr>
        <td>TÊN DANH MỤC:</td>
        <td><?= $row['name']; ?></td>
    </tr>
    <tr>
        <td>GIÁ:</td>
        <td><?= $row['price']; ?></td>
    </tr>
    <tr>
        <td>SỐ LƯỢNG TỒN KHO:</td>
        <td><?= $row['quantity']; ?></td>
    </tr>
    
    <tr>
        <td>ẢNH:</td>
        <td><img width="200" src="<?php echo ROOT_URL . $row['IMAGE']; ?>" alt=""></td>
    </tr>
    <tr>
        <td>TRẠNG THÁI:</td>
        <td><?= $row['status']; ?></td>
    </tr>
   <tr>
    <td>TÊN LOẠI HÀNG:</td>
    <td>
        <?php foreach ($categories['categories'] as $category) {
            if ($category['id'] == $row['category_id']) {
                echo $category['name'];
                break;
            }
        } ?>
    </td>
</tr>
<tr>
    <td>TÊN THƯƠNG HIỆU:</td>
    <td>
        <?php foreach ($brands['brands'] as $brand) {
            if ($brand['id'] == $row['brand_id']) {
                echo $brand['name'];
                break;
            }
        } ?>
    </td>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
