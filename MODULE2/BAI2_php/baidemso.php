<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tim = $_REQUEST["tim"];
    $ten = "Trần Quang Tâm";
    $count = 0;
    for ($i =0 ; $i < strlen($ten); $i++) {
        if ($ten[$i] == $tim) {
            //vd bien tim = t 
            $count ++;
        }
    }
    echo "Kết quả: " . $count;
}
// $ten = "tam";
// echo $ten[3];
?>
<form action="" method="post">
    <label>Nhập ký tự cần tìm</label><br>
    <input type="text" name="tim" placeholder="Nhập ký tự cần tìm"><br><br>
    <input type="submit" name="nhap" value="Nhập">
</form> 