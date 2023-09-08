<?php
class Node {
    public $value;
    public $next;

    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

class MyQueue {
    private $elements = [];
    private $limit;

    public function __construct($limit) {
        $this->limit = $limit;
    }

    // Thêm phần tử vào mảng
    public function enqueue($item) {
        if ($this->isFull()) {
            echo "Mảng đã đầy. Không thể thêm phần tử mới.";
            
        }else{
            array_push($this->elements, $item);
        }

    }

    // Xóa phần tử từ mảng
    public function dequeue() {
        if ($this->isEmpty()) {
            echo "Mảng rỗng. Không thể lấy phần tử.";
            return;
        }

        array_shift($this->elements);
    }

    // Xem phần tử đầu tiên của mảng
    public function peek() {
        if ($this->isEmpty()) {
            echo "Mảng rỗng.";
            }

        return current($this->elements);
    }

    // Kiểm tra rỗng
    public function isEmpty() {
        return count($this->elements) === 0;
    }

    // Kiểm tra đầy
    public function isFull() {
        return count($this->elements) === $this->limit;
    }
}

// Khởi tạo đối tượng
$queue = new MyQueue(4);

$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(5);

echo $queue->peek();