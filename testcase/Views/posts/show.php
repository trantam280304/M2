<table class="post-details">
    <tr>
        <h3>Xem chi tiết sản phẩm</h3>
    </tr>
    <tr>
        <td>email:</td>
        <td><?= $row['email']; ?></td>
    </tr>
    <tr>
        <td>tieu de:</td>
        <td><?= $row['title']; ?></td>
    </tr>
    <tr>
        <td>noi dung:</td>
        <td><?= $row['content']; ?></td>
    </tr>
    
</table>
<style>
    .post-details {
        width: 40%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }

    .post-details h3 {
        margin-bottom: 10px;
    }

    .post-details td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .post-details td:first-child {
        font-weight: bold;
        background-color: #f2f2f2;
    }
</style>