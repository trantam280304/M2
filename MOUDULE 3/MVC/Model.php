<?php
//thong tin nguoi dung

class Person {
    public $name;
    public $age;
    public $adress;
    public function __construct($name,$age,$adress){
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
    }
}
class Model {
    public function ListPerson(){
        return [
            0 => new Person("Nguyễn Văn A",18,"Hà Nội"),
            1 => new Person("Nguyễn Văn B",19,"Quảng Trị"),
            2 => new Person("Nguyễn Văn C",20,"Hồ Chí Minh")
        ];
    }
}
?>