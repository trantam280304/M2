<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $tim2 = $_REQUEST["tim"];

$arr = [1, 3, 4, 5, 6, 5, 1];
$count = 0;
foreach ($arr as $key => $value) {
    if ($value == $tim2) {
        $count += 1;
    }
}
echo $count;
}


?>

 <form action="" method="post">
    <label>Nhap so can tim</label>
    <input type="text" name="tim" placeholder="nhap so can tim">
    <input type="submit" name="nhap">
</form>

