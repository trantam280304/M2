<form action="index.php?action=update&id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data">

    <label for="email">Email:</label>
    <select name="user_id" class="form-control">
                                    <?php foreach ($users['users']as $r) : ?>
                                        <option value="<?php echo $r['id']; ?>" <?php if ($r['id'] == $row['user_id']) echo "selected"; ?>><?php echo $r['email']; ?></option>
                                    <?php endforeach; ?>
                                </select> <br>
    <label for="title">Tiêu đề:</label>
    <input type="text" name="title" id="title" value="<?= $row['title']; ?>"> <br>
    <label for="content">Nội dung:</label>
    <input type="text" name="content" id="content" value="<?= $row['content']; ?>"> <br>
    <input type="submit" value="Cập nhật">
</form>
<style>
    /* Form styles */
    form {
        width: 400px;
        margin: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    select, input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>