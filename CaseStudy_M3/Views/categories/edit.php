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
        background-color: #0099FF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<h3>SỬA SẢN PHẨM</h3>
<form action="index.php?controller=category&action=update&id=<?= $row['id'];?>" method="post">
    <label for="name">TÊN LOẠI HÀNGHÀNG:</label>
    <input type="text" id="name" name="name" value="<?= $row['name'];?>"> <br></br>
 
    <input type="submit" value="CẬP NHẬT">
</form>