<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h3>SỬA SẢN PHẨM</h3>

<form action="index.php?action=update&id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data" class="custom-form">
    <div class="mb-3">
        <label for="name" class="form-label">TÊN:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">GIÁ:</label>
        <input type="number" name="price" value="<?= $row['price']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">SỐ LƯỢNG TỒN KHO:</label>
        <input type="text" name="quantity" value="<?= $row['quantity']; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label for="IMAGE" class="form-label">ẢNH:</label>
        <input type="file" name="IMAGE" class="form-control">
    </div>

    <?php if (!empty($row['IMAGE'])) : ?>
        <img src="<?= 'http://localhost/CaseStudy_M3/' . htmlspecialchars($row['IMAGE']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" style="max-width: 200px;">
    <?php endif; ?>

    <div class="mb-3">
        <label for="status" class="form-label">TRẠNG THÁI:</label>
        <select name="status" class="form-select">
            <option value="0" <?php echo ($row['status'] == 0) ? 'selected' : ''; ?>>Hết hàng</option>
            <option value="1" <?php echo ($row['status'] == 1) ? 'selected' : ''; ?>>Còn hàng</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">TÊN LOẠI HÀNG:</label>
        <select name="category_id" class="form-control">
            <?php foreach ($categories['categories'] as $r) : ?>
                <option value="<?php echo $r['id']; ?>" <?php if ($r['id'] == $row['category_id']) echo "selected"; ?>><?php echo $r['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">TÊN THƯƠNG HIỆU</label>
        <select name="brand_id" class="form-control">
            <?php foreach ($brands['brands'] as $r) : ?>
                <option value="<?php echo $r['id']; ?>" <?php if ($r['id'] == $row['brand_id']) echo "selected"; ?>><?php echo $r['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <input type="submit" value="Cập nhật" class="btn btn-primary">
    </div>
</form>