<?php
class HinhTron {
    public $banKinh;

    public function __construct($banKinh) {
        $this->banKinh = $banKinh;
    }

    public function getArea() {
        return 2 * pi() * $this->banKinh;
    }

    public function getPerimeter() {
        return pi() * ($this->banKinh * 2);
    }
}

$hinhtron = new HinhTron(5);
echo $hinhtron->getArea(); // Chu vi: khoảng 31.4159
echo "<br>";
echo $hinhtron->getPerimeter(); // Diện tích: khoảng 78.5398
?>