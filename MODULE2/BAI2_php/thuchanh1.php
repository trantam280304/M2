<form action="" method="post">
    <label>Chọn ngày sinh</label>
    <input type="date" id="from" name="from" placeholder="yyyy/mm/dd" value="<?php echo isset($_POST['from']) ? $_POST['from'] : ''; ?>">
    <label>Đến</label>
    <input type="date" id="to" name="to" placeholder="yyyy/mm/dd" value="<?php echo isset($_POST['to']) ? $_POST['to'] : ''; ?>">
    <input type="submit" name="submit" value="Tìm kiếm">
</form>
<style>
   
    table {
  border-collapse: collapse;
  width: 100%;
  font-family: Arial, sans-serif;
  font-size: 14px;
  color: #333;
  text-align: center;
}

th, td {
  padding: 8px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

caption {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: bold;
  color: #999999;
}

.anh img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
}
</style>
<?php
$danh_sach = [
    "1" => [
        "ten" => "Trần Quang Tâm",
        "sinh_ngay" => "2004/3/28",
        "dia_chi" => "Gio Linh",
        "anh" => "../../tam2.jpg",
    ],
    "2" => [
        "ten" => "Lê Thị Vân Anh",
        "sinh_ngay" => "2007/3/29",
        "dia_chi" => "Gio Linh",
        "anh" => "../../em2.jpg",
    ],
    "3" => [
        "ten" => "DQK",
        "sinh_ngay" => "2001/3/28",
        "dia_chi" => "Gio Linh",
        "anh" => "../../khang2.png",
    ]
];

function searchByDate($dskh, $ngaybd, $ngaykt)
{
    if (empty($ngaybd) || empty($ngaykt)) {
        return $dskh;
    }
    
    $kh_da_loc = [];
    foreach ($dskh as $key => $dskh) {
        if (strtotime($dskh['sinh_ngay']) < strtotime($ngaybd)) {
            continue;
        }
        if (strtotime($dskh['sinh_ngay']) > strtotime($ngaykt)) {
            continue;
        }
        $kh_da_loc[] = $dskh;
    }
    return $kh_da_loc;
}

if (isset($_POST['submit'])) {
    $ngaybd = $_POST['from'];
    $ngaykt = $_POST['to'];
    $kh_da_loc = searchByDate($danh_sach, $ngaybd, $ngaykt);
} else {
    $kh_da_loc = $danh_sach;
}
?>

<table>
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($kh_da_loc as $key => $dskh): ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $dskh['ten']; ?></td>
            <td><?php echo $dskh['sinh_ngay']; ?></td>
            <td><?php echo $dskh['dia_chi']; ?></td>
            <td>
                <div class="anh"><img src="<?php echo $dskh['anh']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>