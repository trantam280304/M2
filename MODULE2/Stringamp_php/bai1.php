<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST["email"];
$pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
if(preg_match($pattern, $email)){
    echo ' đăng ký email hợp lệ';
}
else {
    echo ' đăng ký email k  hợp lệ';
}
}


?>

<form action="" method="post">
<label>Đăng ký email </label><br>
<input type="email" name="email" require>
<input type="submit" value="Đăng ký">

</form>

