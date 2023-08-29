<form action="index.php?action=store" method="post">
<label class="form-label">Emai</label>
                                <select name="user_id" class="form-control">
                                    <?php foreach ($users['users'] as $r) : ?>
                                        <option value="<?php echo $r['id']; ?>"><?php echo $r['email']; ?></option>
                                    <?php endforeach; ?>
                                </select>
    Tiêu đề : <input type="text" name="title"> <br>
    Nội dụng: <input type="text" name="content"> <br>

    <input type="submit" value="Them">
</form>
<style>
    /* Form styles */
    form {
        width: 400px;
        margin: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
    /* Input field styles */
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 15px;
        font-size: 14px;
    }
</style>