<?php
class Circle{
    protected $radius;
    protected $color;
    public function __construct($radius,$color){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function SetRadius($radius){
        $this->radius=$radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color; 
    }
    public function toString(){
        return "Ban Kinh : ".$this->radius.' '.", Mau sac : ".$this->color;
    }
    public function getArea(){
        return "Diện tích hình tròn là : ". $this->radius * $this->radius * 3.14;
    }
}

class Cylinder extends Circle{
    private $height;
    public function __construct($radius,$color,$height){
        parent::__construct($radius,$color);
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function toString(){
        return parent::toString(). ", Chieu cao : ".$this->height;
    }
    public function getVolume(){
        return "Thể tích hình tròn là : " .$this->height * 3 / 2;
    }
}
$cylinder = new Cylinder(50,'red',20);

    //in ra thông tin và diện tích
echo $cylinder->toString();
echo "<br>";
echo $cylinder->getArea();
echo "<br>";
echo $cylinder->getVolume();
?>