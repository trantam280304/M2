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
        display: block;
        margin-bottom: 10px;
    }

    .form-container input[type="text"],
    .form-container input[type="number"],
    .form-container input[type="date"],
    .form-container select {
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
</style>

<div class="form-container">
    <form action="index.php?action=update&id=<?= $row['MABENHNHAN']; ?>" method="post">
        <label for="TENBENHNHAN">Tên bệnh nhân:</label>
        <input type="text" name="TENBENHNHAN" value="<?= $row['TENBENHNHAN']; ?>">

        <label for="PHONG">Phòng:</label>
        <input type="number" name="PHONG" value="<?= $row['PHONG']; ?>">

        <label for="GIOITINH">Giới tính:</label>
        <select id="GIOITINH" name="GIOITINH">
            <option value="Nam" <?= ($row['GIOITINH'] === 'Nam') ? 'selected' : ''; ?>>Nam</option>
            <option value="Nữ" <?= ($row['GIOITINH'] === 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
        </select>

        <label for="TINHTRANG">Tình trạng:</label>
        <select id="TINHTRANG" name="TINHTRANG">
            <option value="Nhẹ" <?= ($row['TINHTRANG'] === 'Nhẹ') ? 'selected' : ''; ?>>Nhẹ</option>
            <option value="Nặng" <?= ($row['TINHTRANG'] === 'Nặng') ? 'selected' : ''; ?>>Nặng</option>
            <option value="Bình thường" <?= ($row['TINHTRANG'] === 'Bình thường') ? 'selected' : ''; ?>>Bình thường</option>
        </select>

        <label for="THONGTIN">Thông tin:</label>
        <input type="text" name="THONGTIN" value="<?= $row['THONGTIN']; ?>">

        <label for="NGAYNHAPVIEN">Ngày nhập viện:</label>
        <input type="date" name="NGAYNHAPVIEN" value="<?= $row['NGAYNHAPVIEN']; ?>">

        <input type="submit" value="Cập nhật">
    </form>
</div>