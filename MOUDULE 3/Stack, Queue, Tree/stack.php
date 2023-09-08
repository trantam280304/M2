<?php
class Stack {
    private $stack; // Mảng lưu trữ các phần tử trong stack

    public function __construct() {        // __construct(): Phương thức khởi tạo, tạo một mảng rỗng để lưu trữ các phần tử trong stack.
        $this->stack = array();
    }

    public function isEmpty() {            // isEmpty(): Kiểm tra xem stack có rỗng không.
        return empty($this->stack);
    }

    public function push($item) {           // push($item): Thêm một phần tử vào đỉnh của stack.
        array_push($this->stack, $item);
    }

    public function pop() {                 // pop(): Lấy và xóa phần tử ở đỉnh của stack.
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            return null; // Hoặc có thể ném một ngoại lệ (exception) tùy thuộc vào yêu cầu
        }
    }

    public function peek() {              // peek(): Lấy giá trị của phần tử ở đỉnh của stack mà không xóa nó.
        if (!$this->isEmpty()) {
            return end($this->stack);
        } else {
            return null; // Hoặc có thể ném một ngoại lệ (exception) tùy thuộc vào yêu cầu
        }
    }

    public function clear() {              // clear(): Xóa tất cả các phần tử trong stack.
        $this->stack = array();
    }

    public function size() {               // size(): Trả về số lượng phần tử hiện có trong stack.

        return count($this->stack);
    }
}
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(4);


echo $stack->pop();  
// Kết quả: 3
echo $stack->peek(); // Kết quả: 2
 // Kết quả: 1 (true)