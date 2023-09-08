<?php
// self
// class Sinhvien {
//     public static $soLuongSinhvien =1 ;

//     public function __construct() {
//         self::$soLuongSinhvien=5 ; // giá trị biến tĩnh
    // }

//     public function thongTinSinhvien($value) {
//         return self::$soLuongSinhvien;
//     }
// }
// khởi tạo đối tượng 
// $sv = new Sinhvien();
// echo $sv->thongTinSinhvien(); //  Tổng số sinh viên: 1

// echo sinhvien::$soLuongSinhvien;

// không cần khởi tạo 
// echo $sv->thongTinSinhvien(Sinhvien::$soLuongSinhvien); // Output: 1





// this 
// class Person {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
    
// }

// $person = new Person("An", 25);
// echo $person->name; 
// echo "<br>";
// echo $person->age; 

 // Phương thức tĩnh (static method)
 /* - Đối với lập trình hướng đối tượng trong PHP, “phương thức tĩnh” 
 là loại phương thức có thể được gọi trực tiếp mà không cần phải tạo một đối tượng từ lớp chứa phương thức đó.
 - Trong một lớp, phương thức tĩnh được khai báo bởi từ khóa static */

//  class Greeting{
// 		public static function welcome(){
// 			echo "Chào cả nhà";
// 		}
// 	}
// 	Greeting::welcome();

/* static property

“thuộc tính tĩnh” là loại thuộc tính có thể được gọi trực tiếp mà không cần phải tạo một đối tượng từ lớp chứa thuộc tính đó.


*/



class DoAn
{
    public function classType()
    {
        echo "Đây là DoAn";
    }

    public function echoClass() {
        $this->classType();
    }
}

class Pho extends DoAn
{
    public function classType() {
        echo "Đây là Pho";
    }
}

$pho = new Pho();
$pho->echoClass(); // kết quả là Đây là Pho
?>