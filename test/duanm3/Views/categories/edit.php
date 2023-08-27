
<form action="index.php?action=update&id=<?= $row['id']; ?>" method="post" class="my-form" enctype="multipart/form-data">
    <h3>Sửa danh mục</h3>
    <div class="form-group">
        <label for="name">TEN DANH MUC:</label>
        <input type="text" id="name" name="name" value="<?= $row['name']; ?>" class="form-input">
    </div>
    <div class="form-group">
        <label for="description">MO TA:</label>
        <input type="text" id="description" name="description" value="<?= $row['description']; ?>" class="form-input">
        
        <?php if (!empty($row['IMAGE'])) : ?>
            <img src="<?= 'http://localhost/test/duanm3/' . htmlspecialchars($row['IMAGE']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" style="max-width: 200px;">
        <?php endif; ?>
        <input type="file" name="IMAGE"><br><br>
    </div>

    <input type="submit" value="Cập nhật" class="form-button">
</form>
<style>
    .my-form {
        max-width: 400px;
        margin: 20px;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .form-button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #3333FF;
        color: white;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
    }

    .form-button:hover {
        opacity: 0.8;
    }
</style>