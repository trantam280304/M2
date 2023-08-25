<?php
class Hinhvuong
{
    public $canh;
    public function __construct($canh)
    {
        $this->canh = $canh;
    }
    public function getArea()
    {
        return $this->canh * $this->canh;
    }
    public function getPerimeter()
    {
        return $this->canh * 4;
    }
    public function display() {
        return "hinhvuong {" . "canh = ".$this->canh."}";
    }
}
$hinhvuong = new Hinhvuong(9);
echo $hinhvuong->getArea();
echo "<br>";
echo $hinhvuong->getPerimeter();
