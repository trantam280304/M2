<style>
   form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 600px;
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
        border-radius: 13px;
    }

    input[type="submit"] {
        background-color: #0033FF;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 19px;
        cursor: pointer;
    }
</style>
<style>
    .error-message {
        color: red;
        font-size: 15px;
    }
    .h3{
        margin-left: 190px;
    }
</style>
<h3 class ="h3">THÊM LOẠI HÀNG</h3>
<script>
    function validateForm() {
        var nameInput = document.forms["myForm"]["name"].value;
        var errorElement = document.getElementById("name-error");

        if (nameInput === "") {
            errorElement.textContent = "Vui lòng điền tên hàng vào ô trống.";
            return false;
        }
        
        // Clear the error message if input is valid
        errorElement.textContent = "";
    }
</script>

<form name="myForm" action="index.php?controller=category&action=store" method="post" onsubmit="return validateForm()">
    <label>TÊN LOẠI HÀNG:</label>
    <input type="text" name="name">
    <span id="name-error" class="error-message"></span>
    <br></br>
    <input type="submit" value="THÊM MỚI">
</form>
        