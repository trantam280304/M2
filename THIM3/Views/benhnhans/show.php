<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .container table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc;
    }

    .container th,
    .container td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .container th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .container tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .container tr:hover {
        background-color: #e5e5e5;
    }
</style>

<div class="container">
    <table>
        <tr>
            <td>Mã bệnh nhân</td>
            <td><?= $row['MABENHNHAN']; ?></td>
        </tr>
        <tr>
            <td>Tên bệnh nhân</td>
            <td><?= $row['TENBENHNHAN']; ?></td>
        </tr>
        <tr>
            <td>Phòng</td>
            <td><?= $row['PHONG']; ?></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><?= $row['GIOITINH']; ?></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td><?= $row['TINHTRANG']; ?></td>
        </tr>
        <tr>
            <td>Thông tin</td>
            <td><?= $row['THONGTIN']; ?></td>
        </tr>
        <tr>
            <td>Ngày nhập viện</td>
            <td><?= $row['NGAYNHAPVIEN']; ?></td>
        </tr>
    </table>
</div>