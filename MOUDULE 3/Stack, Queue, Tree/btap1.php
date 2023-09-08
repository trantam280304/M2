<?php
class Stack{
    private $stack;
    private $limit;
    public function __construct($limit = 5){
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($item){
        if ($this->isFull()) {
            array_unshift($this->stack, $item);
        }
        else {
            echo "Ngăn xếp đã đầy khong the them phan tu $item vao ngan xep ";
        }
    }
    public function pop(){
        if(!empty($this->stack)){
            return array_shift($this->stack);
        }
        else {
           return 'mảng đang rỗng. không có phần tử để xóa';
        }
    }
    public function top(){
        if(!empty($this->stack)){
            return $this->stack[0];
        }
        else {
           echo "mảng không có phaanf tuwr.";
        }
    }
    public function isEmpty(){
        return empty($this->stack) ? "Mảng rỗng" : "Mảng không rỗng";
    }
    public function isFull(){
        return count($this->stack) < $this->limit;
    }
}
$stack = new Stack();
$stack->push(2);
$stack->push(4);
$stack->push(3);
$stack->push(5);
$stack->push(8);
$stack->push(10);
// echo $stack->top();
echo '<pre>';
print_r($stack);
echo '</pre>';
?> 