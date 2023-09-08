<style>
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 1350px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 23px;
    }

    input[type="submit"] {
        background-color: #0099FF;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 13px;
        cursor: pointer;
    }
    .h3{
        margin-left: 500px;
    }
</style>
<style>
    .error-message {
        color: red;
        font-size: 15px;
    }
</style>

<script>
    function validateForm() {
        var nameInput = document.forms["myForm"]["name"].value;
        var addressInput = document.forms["myForm"]["address"].value;
        var phoneInput = document.forms["myForm"]["phone"].value;

        var nameErrorElement = document.getElementById("name-error");
        var addressErrorElement = document.getElementById("address-error");
        var phoneErrorElement = document.getElementById("phone-error");

        var isValid = true;

        // Kiểm tra trường tên
        if (nameInput === "") {
            nameErrorElement.textContent = "Vui lòng điền tên khách hàng vào ô trống.";
            isValid = false;
        } else {
            nameErrorElement.textContent = "";
        }

        // Kiểm tra trường địa chỉ
        if (addressInput === "") {
            addressErrorElement.textContent = "Vui lòng điền địa chỉ khách hàng vào ô trống.";
            isValid = false;
        } else {
            addressErrorElement.textContent = "";
        }

        // Kiểm tra trường số điện thoại
        if (phoneInput === "") {
            phoneErrorElement.textContent = "Vui lòng điền số điện thoại khách hàng vào ô trống.";
            isValid = false;
        } else if (!/^\d+$/.test(phoneInput)) {
            phoneErrorElement.textContent = "Số điện thoại chỉ được chứa các chữ số.";
            isValid = false;
        } else {
            phoneErrorElement.textContent = "";
        }

        return isValid;
    }
</script>
<h3 class="h3">THÊM KHÁCH HÀNG</h3>

<form name="myForm" action="index.php?controller=customer&action=store" method="post" onsubmit="return validateForm()">
    <label>TÊN KHÁCH HÀNG :</label>
    <input type="text" name="name">
    <span id="name-error" class="error-message"></span>

    <label>ĐỊA CHỈ:</label>
    <input type="text" name="address">
    <span id="address-error" class="error-message"></span>

    <label>SDT:</label>
    <input type="text" name="phone">
    <span id="phone-error" class="error-message"></span>

    <br></br>
    <input type="submit"  value="THÊM MỚI">
</form>