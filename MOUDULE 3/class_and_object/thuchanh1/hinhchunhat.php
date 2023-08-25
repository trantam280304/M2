<?php
class HinhChuNhat{
    //khai báo thuộc tính
    public  $width;
    public  $height;
    //định nghĩa pthuc khởi tạo
    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    

    //khai bao pthuc tinh dien tich
    public function getArea(){
        return $this->width * $this->height; 
    }

    //khai bao pthuc tinh chu vi
    public function getPerimeter() {
        return(($this->width + $this->height) * 2);
    }
    //khai bao pthuc hiển thị
    public function display() {
        return "Hinh Chu Nhat {" . "width = ".$this->width." , height = ".$this->height."}";
    }
}
$hinhchunhat = new HinhChuNhat(6,4);
 echo $hinhchunhat->getArea();
 echo '<br>';
 echo $hinhchunhat->getPerimeter();

?>