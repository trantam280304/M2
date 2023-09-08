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
<h3>XEM CHI TIẾT SẢN PHẨMPHẨM</h3>
<table>
    <tr>
        <td>STT :</td>
        <td><?= $row['id']; ?></td>
    </tr>
    <tr>
        <td>TÊN HÀNG :</td>
        <td><?= $row['name']; ?></td>
    </tr>
</table>