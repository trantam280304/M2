<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table th {
        background-color: #4CAF50;
        color: #fff;
    }
</style>
<h3>XEM THÔNG TIN KHÁCH HÀNG</h3>
<table>
    <tr>
        <td>STT :</td>
        <td><?= $row['id']; ?></td>
    </tr>
    <tr>
        <td>TÊN KHÁCH HÀNG :</td>
        <td><?= $row['name']; ?></td>
    </tr>
    <tr>
        <td>ĐỊA CHỈ :</td>
        <td><?= $row['address']; ?></td>
    </tr>
    <tr>
        <td>SDT :</td>
        <td><?= $row['phone']; ?></td>
    </tr>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">