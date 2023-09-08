<style>
    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
    }

    input[type="submit"] {
        padding: 8px 16px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="index.php?controller=customer&action=update&id=<?= $row['id']; ?>" method="post">
    <label for="name">TÊN KHÁCH HÀNG:</label>
    <input type="text" name="name" value="<?= $row['name']; ?>"> <br></br>
    <label for="name">ĐỊA CHỈCHỈ:</label>
    <input type="text" name="address" value="<?= $row['address']; ?>"> <br></br>
    <label for="name">SDT:</label>
    <input type="number" name="phone" value="<?= $row['phone']; ?>"> <br></br>
    <input type="submit" value="CẬP NHẬT">
</form>