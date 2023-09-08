<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Validate -->
<script>
    function validateForm() {
        var fields = [{
                name: "name",
                message: "Vui lòng điền tên hàng vào ô trống."
            },
            {
                name: "price",
                message: "Vui lòng nhập giá hàng."
            },
            {
                name: "quantity",
                message: "Vui lòng nhập số lượng hàng."
            },
            {
                name: "IMAGE",
                message: "Vui lòng chọn ảnh hàng."
            },
            {
                name: "category_id",
                message: "Vui lòng chọn loại hàng."
            },
            {
                name: "brand_id",
                message: "Vui lòng chọn thương hiệu."
            }
        ];

        var isValid = true;

        fields.forEach(function(field) {
            var input = document.forms["myForm"][field.name].value;
            var errorElement = document.getElementById(field.name + "-error");

            if (input === "") {
                errorElement.textContent = field.message;
                isValid = false;
            } else {
                errorElement.textContent = "";
            }
        });

        return isValid;
    }
</script>

<form name="myForm" action="index.php?action=store" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" class="custom-form">
    <h3 class="h3">THÊM SẢN PHẨM</h3>
<div class="mb-3">
        <label for="name" class="form-label">TÊN SẢN PHẨM:</label>
        <input type="text" name="name" class="form-control">
        <span id="name-error" class="error-message"></span>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">GIÁ SẢN PHẨM:</label>
        <input type="number" name="price" class="form-control">
        <span id="price-error" class="error-message"></span>
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">SỐ LƯƠNG TỒN KHO:</label>
        <input type="text" name="quantity" class="form-control">
        <span id="quantity-error" class="error-message"></span>
    </div>

    <div class="mb-3">
        <label for="IMAGE" class="form-label">ẢNH:</label>
        <input type="file" name="IMAGE" class="form-control">
        <span id="IMAGE-error" class="error-message"></span>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Trạng thái:</label>
        <select name="status" class="form-select">
            <option value="0">Hết hàng</option>
            <option value="1">Còn hàng</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">TÊN LOẠI HÀNG:</label>
        <select name="category_id" class="form-select">
            <?php foreach ($categories as $r) : ?>
                <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="brand_id" class="form-label">TÊN THƯƠNG HIỆU:</label>
        <select name="brand_id" class="form-select">
            <?php foreach ($brands as $r) : ?>
                <option value="<?php echo $r['id']; ?>"><?php echo $r['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">

        <input type="submit" value="THÊM MỚI" class="btn btn-primary">
        <span id="category_id-error" class="error-message"></span>
        <span id="brand_id-error" class="error-message"></span>

    </div>

</form>
<style>
    .error-message {
        color: red;
    }
   .h3{
text-align: center;
}
</style>

<!-- Your form code here -->