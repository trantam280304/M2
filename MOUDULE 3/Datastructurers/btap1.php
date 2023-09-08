<?php
class Dancer {
    public $name;
    public $gender;
    public function __construct($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}
//Tạo 2 hàng đợi
$male = new SplQueue();
$female = new SplQueue();

//thêm dancer nam
$male->enqueue("Tâm");
$male->enqueue("khang");
$male->enqueue("bảo");
$male->enqueue("nghia");

//thêm dancer nữ
$female->enqueue("vân Anh");
$female->enqueue("dung");
$female->enqueue("tokuda");
$female->enqueue("fukami");
$female->enqueue("linh");    
$female->enqueue("thao");

//lấy ra hai người đúng đầu danh sách
// echo $male->dequeue();
// echo'-';    
// echo $female->dequeue();
// echo "<br>";

//kiểm tra rỗng và in ra các cặp nhảy
if($male->isEmpty() || $female->isEmpty()){
    echo "1 trong hai hàng đợi đang rỗng";
}else{
    while (!$male->isEmpty() && !$female->isEmpty()) {
        echo "Cặp nhảy : ". $male->dequeue() ."-". $female->dequeue()."<br>";
    }
}
echo "<br>";

//kiểm tra rổng và in ra danh sách đợi
echo "Người đang phải đợi : "."<br>";
while (!$male->isEmpty()) {
    echo "Nam : ". $male->dequeue()."<br>";
}

while (!$female->isEmpty()) {
    echo "Nữ  : ". $female->dequeue()."<br>";
}


// echo "<pre>";
// print_r($male);
// echo "</pre>";

// echo "<pre>";
// print_r($female);
// echo "</pre>";

?>