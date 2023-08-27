
<form action="index.php?action=store" method="post" class="my-form" onsubmit="return validateForm()" enctype="multipart/form-data">
    <h3>THÊM DANH MỤC</h3>
    <div class="form-group">
        <label for="name">TÊN:</label>
        <input type="text" id="name" name="name" class="form-input">
        <span id="name-error" class="error-message"></span>
    </div>
    <div class="form-group">
        <label for="description">MÔ TẢ:</label>
        <input type="text" id="description" name="description" class="form-input" placeholder="Điền phần mô tả">
        
        <label class="form-label">IMAGE</label>
        <input type="file" class="form-control" name="IMAGE">

    </div>
    <input type="submit" value="THÊM" class="form-button">
</form>

<style>
    .error-message {
        color: red;
    }
</style>

<!-- <script>
    function validateForm() {
        var nameInput = document.getElementById("name");
        var descriptionInput = document.getElementById("description");
        var nameError = document.getElementById("name-error");
        var descriptionError = document.getElementById("description-error");
        
        if (nameInput.value.trim() === "") {
            nameError.textContent = "Vui lòng điền tên danh mục.";
            return false; // Ngăn form được gửi đi
        }
        
        if (descriptionInput.value.trim() === "") {
            descriptionError.textContent = "Vui lòng điền phần mô tả.";
            return false; // Ngăn form được gửi đi
        }
        
        nameError.textContent = ""; // Xóa thông báo lỗi nếu có
        descriptionError.textContent = ""; // Xóa thông báo lỗi nếu có
        return true; // Cho phép form được gửi đi
    }
</script> -->
<style>
    .my-form {
        max-width: 500px;
        margin: 2px;
        ;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .form-button {
        display: block;
        width: 30%;
        padding: 10px;
        background-color: #3333FF;
        color: white;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
    }

    .form-button:hover {
        opacity: 0.8;
    }
</style>