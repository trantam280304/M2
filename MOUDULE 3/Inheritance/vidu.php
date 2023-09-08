<?php
// class Database{
//     public function __construct()
//     {
//     echo "Tran Quang Tam <br/>";
//     }
//     public function fetch(){
//     return '19 tuổi';
//     }
//     }
    
//     class Business extends Database{
//     public function getDetail(){
//     return $this->fetch();
//     }
//     }
    
//     $business = new Business();
//     echo $business->getDetail();


// method overriding
// class Animal {
//     public function amThanh() {
//         echo "Động vật phát ra một âm thanh <br/>";
//     }
// }

// class Dog extends Animal {
//     public function amThanh() {
//         echo "Con chó sủa";
//     }
// }

// $animal = new Animal();
// $animal->amThanh();

// $dog = new Dog();
// $dog->amThanh(); 

// tu khoa parent
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    protected function eat() {
        echo "Động vật $this->name đang ăn";
    }
}

class Dog extends Animal {
    public function eat() {
         parent::eat();
       

        echo " thức ăn của chó";
    }
}

$dog = new Dog('B');
$dog->eat();
    ?>
