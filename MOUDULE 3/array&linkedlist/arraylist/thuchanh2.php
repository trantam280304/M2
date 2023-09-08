<?php
class Node {
    public $data;
    public $next;

    function __construct($data = [], $next = null) {
        $this->data = $data;
        $this->next = $next;
    }

    function readNode() {
        return $this->data;
    }
}

class LinkedList {
    public $firstNode;
    public $lastNode;
    public $count;

    function __construct($firstNode = null, $lastNode = null, $count = 0) {
        $this->firstNode = $firstNode;
        $this->lastNode = $lastNode;
        $this->count = $count;
    }

    function insertFirst($data) {
        $node = new Node($data, $this->firstNode);
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    function insertLast($data) {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    function totalNodes() {
        return $this->count;
    }

    function readList() {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            $listData[] = $current->readNode();
            $current = $current->next;
        }

        return $listData;
    }
}

$linkedList = new LinkedList();

$linkedList->insertFirst(11);
$linkedList->insertLast(44);
$linkedList->insertFirst(22);
$linkedList->insertLast(13);

$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes; // Kết quả: 4
echo "<br>";
echo implode('-', $linkData); // Kết quả: 22-11-44-13