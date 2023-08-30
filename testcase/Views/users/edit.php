
<form action="index.php?action=update&id=<?= $row['id'];?>" method="post"enctype="multipart/form-data">
    TENHANG :<input type="text" name="name" value="<?= $row['name'];?>"> <br>
    MK: <input type="number" name="password" value="<?= $row['password'];?>"> <br>
    email: <input type="text" name="email" value="<?= $row['email'];?>"> <br>
    sdt: <input type="number" name="phone" value="<?= $row['phone'];?>"> <br>
    <?php if (!empty($row['IMAGE'])) : ?>
            <img src="<?= 'http://localhost/testcase' . htmlspecialchars($row['IMAGE']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" style="max-width: 200px;">
        <?php endif; ?>
        <input type="file" name="IMAGE"><br><br>
    <input type="submit" value="Cap nhat">
</form>
