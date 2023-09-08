<?php
// khởi tạo đối tượng
$dlist = new SplDoublyLinkedList();
// sử dụng phương thức push để thêm vào 3 phần tử
$dlist->push('tam');
$dlist->push('bao');
$dlist->push('nghia');
// sử dụng unshift để thêm phần tử vào đầu danh sách    
// $dlist->unshift(1);
// $dlist->unshift(2);
// $dlist->unshift(3);
// chúng ta sử dụng phương thức rewind() để đưa con trỏ lặp về phần tử đầu tiên của danh sách.
// chúng ta sử dụng phương thức valid() để kiểm tra xem con trỏ lặp có trỏ đến một phần tử hợp lệ hay không.
// chúng ta sử dụng phương thức next() để di chuyển con trỏ lặp đến phần tử tiếp theo.
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
for ($dlist->rewind(); $dlist->valid(); $dlist->next()) {
    // chúng ta sử dụng phương thức current() để lấy giá trị hiện tại của phần tử và in ra màn hình
    echo $dlist->current() . "<br/>";
}
echo "<hr/>";
//  chúng ta sử dụng hằng số SplDoublyLinkedList::IT_MODE_LIFO để đặt chế độ là LIFO (Last In, First Out), 
$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($dlist->rewind(); $dlist->valid(); $dlist->next()) {

    echo $dlist->current() . "<br/>";;
}
