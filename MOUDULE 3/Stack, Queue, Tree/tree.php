<?php
class Node
{
    public $data;
    public $left;
    public $right;
    public function __construct($item)
    {
        $this->data = $item;
        $this->left = null;
        $this->right = null;
    }
}
class BinarySearchTree
{
    public $root;
    public function __construct()
    {
        $this->root = null;
    }
    public function insert($data)
    {
        $newNode = new Node($data);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }
    private function insertNode(&$node, &$newNode)
    {
        if ($node === null) {
            $node = $newNode;
        } else {
            if ($newNode->data < $node->data) {
                $this->insertNode($node->left, $newNode);
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }
    public function search($data)
    {
        return $this->searchNode($this->root, $data);
    }
    private function searchNode($node, $data)
    {
        if ($node === null || $node->data === $data) {
            return $node;
        }
        if ($data < $node->data) {
            return $this->searchNode($node->left, $data);
        } else {
            return $this->searchNode($node->right, $data);
        }
    }
    public function preOrderTraversal()
    {
        $this->preOrder($this->root);
    }
    private function preOrder($node)
    {
        if ($node !== null) {
            echo $node->data . " ";
            $this->preOrder($node->left);
            $this->preOrder($node->right);
        }
    }
    public function inOrderTraversal()
    {
        $this->inOrder($this->root);
    }
    private function inOrder($node)
    {
        if ($node !== null) {
            $this->inOrder($node->left);
            echo $node->data . " ";
            $this->inOrder($node->right);
        }
    }
    public function postOrderTraversal()
    {
        $this->postOrder($this->root);
    }
    private function postOrder($node)
    {
        if ($node !== null) {
            $this->postOrder($node->left);
            $this->postOrder($node->right);
            echo $node->data . " ";
        }
    }
}
//tạo obj
$bst = new BinarySearchTree();
// Chèn các phần tử vào cây
$bst->insert(8);
$bst->insert(3);
$bst->insert(10);
$bst->insert(1);
$bst->insert(6);
$bst->insert(14);
$bst->insert(4);
$bst->insert(7);
$bst->insert(13);
// Tìm kiếm phần tử trong cây
$result = $bst->search(7);
if ($result !== null) {
    echo "Phần tử 7 được tìm thấy trong cây.";
} else {
    echo "Phần tử 7 không tồn tại trong cây.";
}
echo "<hr>";
// Duyệt tiền thứ tự
echo "Duyệt tiền thứ tự: ";
$bst->preOrderTraversal();
echo "<hr>";
// Duyệt trung thứ tự
echo "Duyệt trung thứ tự: ";
$bst->inOrderTraversal();
echo "<hr>";
// Duyệt hậu thứ tự
echo "Duyệt hậu thứ tự: ";
$bst->postOrderTraversal();
echo "<hr>";