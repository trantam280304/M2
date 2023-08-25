<?php
// Ket noi CSDL
include_once '../db.php';
// Lay ID tren url xuong
$id = isset($_GET['id']) ? $_GET['id'] : 0;

try {
    // Viet cau SQL
    $mysql = "DELETE FROM loai_hangs WHERE MALOAIHANG = $id";
    // Thuc thi SQL
    $conn->exec($mysql);
    //Chuyen huong ve danh sach
    header("Location:index.php");
    die();
} catch (PDOException $e) {
    // Kiểm tra lỗi ràng buộc khóa ngoại
    if ($e->getCode() == 23000) {
        // Lỗi ràng buộc khóa ngoại xảy ra
        $error = "Loại hàng không thể xóa. Có sản phẩm mắc định thuộc loại hàng này.";
        // Hiển thị thông báo lỗi
        echo $error;
    } else {
        // Lỗi khác xảy ra
        echo "Lỗi: " . $e->getMessage();
    }
}