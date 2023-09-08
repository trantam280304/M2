<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
    }

    .form-container label {
        font-weight: bold;
    }

    .form-container select,
    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-container input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: red;
        font-size: 15px;
    }
</style>
<div class="form-container">
    <form action="index.php?action=store" method="post" onsubmit="return validateForm()" name="myForm">
        <label for="TENBENHNHAN">TÊN BỆNH NHÂN:</label><br>
        <input type="text" id="TENBENHNHAN" name="TENBENHNHAN"><br>
        <span id="name-error" class="error-message"></span><br>

        <label for="PHONG">PHÒNG:</label><br>
        <input type="number" id="PHONG" name="PHONG"><br>
        <span id="room-error" class="error-message"></span><br>

        <label for="GIOITINH">GIỚI TÍNH:</label><br>
        <select id="GIOITINH" name="GIOITINH">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>

        <label for="TINHTRANG">TÌNH TRẠNG:</label><br>
        <select id="TINHTRANG" name="TINHTRANG">
            <option value="Nhẹ">Nhẹ</option>
            <option value="Nặng">Nặng</option>
            <option value="Bình thường">Bình thường</option>
        </select><br>

        <label for="THONGTIN">THÔNG TIN:</label><br>
        <input type="text" id="THONGTIN" name="THONGTIN"><br>
        <span id="info-error" class="error-message"></span><br>

        <label for="NGAYNHAPVIEN">NGÀY NHẬP VIỆN:</label><br>
        <input type="date" id="NGAYNHAPVIEN" name="NGAYNHAPVIEN"><br>
        <span id="date-error" class="error-message"></span><br>

        <input type="submit" value="Thêm">
    </form>
</div>

<script>
    function validateForm() {
        var nameInput = document.forms["myForm"]["TENBENHNHAN"].value;
        var roomInput = document.forms["myForm"]["PHONG"].value;
        var infoInput = document.forms["myForm"]["THONGTIN"].value;
        var dateInput = document.forms["myForm"]["NGAYNHAPVIEN"].value;
        var nameErrorElement = document.getElementById("name-error");
        var roomErrorElement = document.getElementById("room-error");
        var infoErrorElement = document.getElementById("info-error");
        var dateErrorElement = document.getElementById("date-error");

        if (nameInput === "") {
            nameErrorElement.textContent = "Vui lòng điền tên bệnh nhân vào ô trống.";
            return false;
        } else {
            nameErrorElement.textContent = "";
        }

        if (roomInput === "") {
            roomErrorElement.textContent = "Vui lòng điền số phòng vào ô trống.";
            return false;
        } else {
            roomErrorElement.textContent = "";
        }

        if (infoInput === "") {
            infoErrorElement.textContent = "Vui lòng điền thông tin vào ô trống.";
            return false;
        } else {
            infoErrorElement.textContent = "";
        }

        if (dateInput === "") {
            dateErrorElement.textContent = "Vui lòng chọn ngày nhập viện.";
            return false;
        } else {
            dateErrorElement.textContent = "";
        }

        // Các kiểm tra khác tùy theo yêu cầu của bạn

        return true;
    }
</script>