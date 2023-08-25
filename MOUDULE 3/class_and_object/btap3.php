<?php
// Thiết kế lớp Fan 
class Fan {
    // 3 thuộc tính hằng được đặt tên là SLOW, MEDIUM, và FAST với giá trị 1, 2, và 3 để biểu thị tốc độ quạt.
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        // Thuộc tính speed có kiểu số nguyên và mức truy xuất là private để xác định tốc độ quạt, mặc định là SLOW
        $this->speed = "SLOW";
        // Thuộc tính on có kiểu lô-gic và mức truy xuất private để xác định quạt đang bật hay tắt, mặc định là false (tắt).
        $this->on = false;  
        // Thuộc tính radius có kiểu thực và mức truy xuất private để xác định bán kính quạt, giá trị mặc định là 5
        $this->radius = 5;
        // Thuộc tính color có kiểu dữ liệu là chuỗi và mức truy xuất private để xác định màu quạt, mặc định là "blue"
        $this->color = "blue";
    }
    // Các getter và setter cho các thuộc tính
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getOn(){
        return $this->on;
    }
    public function setOn($on){
        $this->on = $on;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
    /* Phương thức toString() trả về chuỗi chứa thông tin của quạt. Nếu quạt đang ở trạng thái on, 
    phương thức trả về speed, color, và radius với chuỗi "fan is on". Nếu quạt không ở trạng thái on, 
    phương thức trả về color, radius với chuỗi "fan is off". */
    public function toString(){
        if($this->on){
            return "Tốc độ quạt : ". $this->speed. ", bán kính : ".$this->radius .", màu sắc : " .$this->color. " quạt đang chạy";
        }else{
            return "Màu sắc : ".$this->color . "quạt đang tắt ";
        }
    }
}
$Fan1 = new Fan();
$Fan1->setSpeed(Fan::FAST);
$Fan1->setRadius(10);
$Fan1->setColor("yellow");
$Fan1->setOn(True);

$Fan2 = new Fan();
$Fan2->setSpeed(Fan::MEDIUM);
$Fan2->setRadius(5);
$Fan2->setColor("blue ");
$Fan2->setOn(true);

echo "Quạt 1 :" .$Fan1->toString();
echo"<br>";
echo"Quạt 2 :". $Fan2->toString();