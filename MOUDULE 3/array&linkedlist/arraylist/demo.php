<?php
class DanhSach {
    public $phantu;

    public function __construct() {
        $this->phantu = [];
    }

    public function them($ptu) {
        $this->phantu[] = $ptu;
    }

    public function lay($index) {
        if ($index >= 0 && $index < count($this->phantu)) {
            return $this->phantu[$index];
        } else {
            throw new Exception("Vị trí không hợp lệ");
        }
    }

    public function kichThuoc() {
        return count($this->phantu);
    }

    public function rong() {
        return empty($this->phantu);
    }

    public function xoa($index) {
        if ($index >= 0 && $index < count($this->phantu)) {
            array_splice($this->phantu, $index, 1);
        } else {
            throw new Exception("Vị trí không hợp lệ");
        }
    }
}
// Tạo một DanhSach
$ds = new DanhSach();

// Kiểm tra DanhSach có rỗng hay không
if ($ds->rong()) {
    echo "Danh sách rỗng.</br>";
} else {
    echo "Danh sách không rỗng.";
}

// Thêm phần tử vào DanhSach
$ds->them("Hoa");
$ds->them("Quả");
$ds->them("Cây");

// Lấy phần tử từ DanhSach và hiển thị
for ($i = 0; $i < $ds->kichThuoc(); $i++) {
    echo $ds->lay($i) . " ";
}

// Xóa phần tử từ DanhSach
$ds->xoa(1);

// Kiểm tra xem một phần tử có tồn tại trong DanhSach hay không
if ($ds->rong()) {
    echo "Danh sách rỗng.";
} else {
    echo "<br> Danh sách không rỗng.";
}