<?php
class Shape{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function show(){
        return "Toi la hinh dang. Ten toi la $this->name";
    }
}
class Circle extends Shape{
    public $radius;
    function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    function getArea(){
        return pi()*($this->radius*$this->radius);
    }
    function getPerimeter(){
        return pi()*$this->radius*2;
    }
}
class Cylinder extends Circle{
    public $height;
    function __construct($name,$radius,$height)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }
    function getArea(){
        return parent::getArea()*2+parent::getPerimeter()*$this->height;
    }
    function getVolume(){
        return parent::getArea()*$this->height;
    }
}
class Rectangle extends shape{
    public $width;
    public $height;
    function  __construct($name,$width,$height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    function getArea(){
        return $this->height * $this->width;
    }
    function getPerimeter(){
        return ($this->height + $this->width) * 2;
    }
}
class Square extends Rectangle
{
    function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}
$circle = new Circle( 'Circle 01',2);
echo 'Diện tích hình tròn : ' . $circle->getArea() . '<br />';
echo ' Chu vi hình tròn : ' . $circle->getPerimeter() . '<hr />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Diện tích hình trụ : ' . $cylinder->getArea() . '<br />';
echo 'Chu vi hình trụ: ' . $cylinder->getPerimeter() . '<hr />';

$rectangle = new Rectangle('Rectangle1',5,6);
echo 'Diện tích hình chữ nhật : '.$rectangle->getArea(). '<br />';
echo 'Chu vi hình chữ nhật : '.$rectangle->getPerimeter() . '<hr />';

$square = new Square('Square1',4);
echo 'Diện tích hình vuông : '.$square->getArea(). '<br />';
echo 'Chu vi hình vuông: '.$square->getPerimeter() . '<hr />';

?>