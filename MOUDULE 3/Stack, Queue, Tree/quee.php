<?php
class Queue {
    private $queue; // Mảng lưu trữ các phần tử trong queue

    public function __construct() {  // __construct(): Phương thức khởi tạo, tạo một mảng rỗng để lưu trữ các phần tử trong queue.
        $this->queue = array();
    }

    public function isEmpty() {     // isEmpty(): Kiểm tra xem queue có rỗng không.
        return empty($this->queue);
    }

    public function enqueue($item) {    //  enqueue($item): Thêm một phần tử vào cuối của queue.
        if ($this->size()){
             return array_push($this->queue, $item);
        } else{
            return null;
        }
    }

    public function dequeue() {       //dequeue(): Lấy và xóa phần tử ở đầu của queue.
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            return null; // Hoặc có thể ném một ngoại lệ (exception) tùy thuộc vào yêu cầu
        }
    }

    public function peek() {         //peek(): Lấy giá trị của phần tử ở đầu của queue mà không xóa nó.
        if (!$this->isEmpty()) {
            return $this->queue[0];
        } else {
            return null; // Hoặc có thể ném một ngoại lệ (exception) tùy thuộc vào yêu cầu
        }
    }

    public function clear() {    //clear(): Xóa tất cả các phần tử trong queue.
        $this->queue = array();
    }

    public function size() {     //size(): Trả về số lượng phần tử hiện có trong queue.
        return count($this->queue) <= 10 ;
    }
}
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);


echo $queue->dequeue();  // Kết quả: 1
echo $queue->peek();     // Kết quả: 2
echo $queue->size();     // Kết quả: 2

echo $queue->clear();
echo $queue->isEmpty();  // Kết quả: 1 (true)