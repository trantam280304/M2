<?php
//CÚ PHÁP KHAI BÁO INTERFACE

// interface MyInterface {
//     // Khai báo các phương thức và yêu cầu của interface
// }

// CÚ PHÁP IMPLEMENTS 

// interface MyInterface {
//     public function method1();
//     public function method2();
// }

// class MyClass implements MyInterface {
//     public function method1() {
//         // Triển khai phương thức method1()
//     }

//     public function method2() {
//         // Triển khai phương thức method2()
//     }
// }

// CÚ PHÁP IMPLEMENTS NHIỀU INTERFACE
// interface Flyable {
//     public function fly();
// }

// interface Swimmable {
//     public function swim();
// }

// class Bird implements Flyable, Swimmable {
//     public function fly() {
//         // Triển khai phương thức fly()
//     }

//     public function swim() {
//         // Triển khai phương thức swim()
//     }
// }
//  VI DU  IMPLEMENTS NHIỀU INTERFACE : 
// interface Flyable {
//     public function fly();
// }

// interface Swimmable {
//     public function swim();
// }

// class Bird implements Flyable, Swimmable {
//     public function fly() {
//         echo "Chim đang bay.<br>";
//     }

//     public function swim() {
//         echo "Ca đang bơi.<br>";
//     }
// }

// $bird = new Bird();
// $bird->fly();
// $bird->swim();
// CÚ PHÁP KẾ THỪA INTERFACE
// interface ParentInterface {
//     // Khai báo các phương thức và yêu cầu của interface cha
// }

// interface ChildInterface extends ParentInterface {
//     // Khai báo các phương thức và yêu cầu của interface con
// }
// VI DU : KẾ THỪA INTERFACE
interface ParentInterface {
    public function parentMethod();
}

interface ChildInterface extends ParentInterface {
    public function childMethod();
}

class MyClass implements ParentInterface {
    public function parentMethod(){
          echo "Đây là phương thức của interface cha.<br>";
    }


    public function childMethod() {
        echo "Đây là phương thức của interface con.<br>";
    }
}

$myObject = new MyClass();
$myObject->parentMethod();
$myObject->childMethod();

// // VI DU :
// // Định nghĩa interface 'Vehicle'
// interface Vehicle
// {
//     public function start();
//     public function stop();
// }

// // Lớp 'Car' triển khai interface 'Vehicle'
// class Car implements Vehicle
// {
//     public function start()
//     {
//         echo "Xe ô tô đã được khởi động.<br>";
//     }

//     public function stop()
//     {
//         echo "Xe ô tô đã được dừng lại.<br>";
//     }
// }

// // Lớp 'Motorcycle' triển khai interface 'Vehicle'
// class Motorcycle implements Vehicle
// {
//     public function start()
//     {
//         echo "Xe máy đã được khởi động.<br>";
//     }

//     public function stop()
//     {
//         echo "Xe máy đã được dừng lại.<br>";
//     }
// }

// // Tạo đối tượng 'Car' và sử dụng phương thức
// $car = new Car();
// $car->start();
// $car->stop();

// // Tạo đối tượng 'Motorcycle' và sử dụng phương thức
// $motorcycle = new Motorcycle();
// $motorcycle->start();
// $motorcycle->stop();
