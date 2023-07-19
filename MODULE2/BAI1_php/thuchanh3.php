<?php
$xuly = [
    "1" => [
        "ten" => "Trần Quang Tâm",
        "ngay_sinh" => "28/03/2004",
        "dia_chi" => "Gio Linh",
        "anh" => "tam.jpg"
    ],
    "2" => [
        "ten" => "Lê Thị Vân Anh",  
        "ngay_sinh" => "19/12/2007",
        "dia_chi" => "Gio Linh",
        "anh" => "em.jpg"
    ],
    "3" => [
        "ten" => "Dương Quốc Khang",
        "ngay_sinh" => "8/03/2004",
        "dia_chi" => "Hà Nội",
        "anh" => "khang.png"
    ]
];
?>

<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($xuly as $key => $value): ?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $value['ten'] ?></td>
                <td><?php echo $value['ngay_sinh'] ?></td>  
                <td><?php echo $value['dia_chi'] ?></td>
                <td><img src="<?php echo $value['anh'] ?>" alt="" height= "150px" width="200px"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <style>
        
        table { 
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>    
</table>