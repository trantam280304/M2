<?php
echo '<br>'.__FILE__;
?>
<form action="index.php?action=store" method="post"enctype="multipart/form-data">
    TÊn :<input type="text" name="name"> <br>
    Mật khẩu : <input type="text" name="password"> <br>
    email: <input type="text" name="email"> <br>
    phone: <input type="number" name="phone"> <br>
    <label class="form-label">IMAGE</label>
        <input type="file" class="form-control" name="IMAGE" ><br>

    <input type="submit" value="Them">
</form>