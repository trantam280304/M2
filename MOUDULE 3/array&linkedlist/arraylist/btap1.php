<?php
class ArrayList {
    public $size;
    public $elements;

    public function __construct() {
        $this->size = 0;
        $this->elements = array();
    }

    public function insert($index, $obj) {
        if ($index >= 0 && $index <= $this->size) {
            for ($i = $this->size - 1; $i >= $index; $i--) {
                $this->elements[$i + 1] = $this->elements[$i];
            }
            $this->elements[$index] = $obj;
            $this->size++;
        } else {
            die("Loi trong ArrayList.insert");
        }
    }

    public function add($obj) {
        $this->elements[$this->size] = $obj;
        $this->size++;
    }

    public function remove($index) {
        if ($this->isInteger($index) && $index >= 0 && $index < $this->size) {
            $removedObj = $this->elements[$index];
            for ($i = $index; $i < $this->size - 1; $i++) {
                $this->elements[$i] = $this->elements[$i + 1];
            }
            $this->size--;
            unset($this->elements[$this->size]);
            return $removedObj;
        } else {
            die("ERROR in ArrayList.remove");
        }
    }

    public function get($index) {
        if ($this->isInteger($index) && $index >= 0 && $index < $this->size) {
            return $this->elements[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function clear() {
        $this->size = 0;
        $this->elements = array();
    }

    public function addAll($arr) {
        if (is_array($arr)) {
            $this->elements = array_merge($this->elements, $arr);
            $this->size += count($arr);
        } else {
            die("ERROR in ArrayList.addAll");
        }
    }

    public function indexOf($obj) {
        $index = array_search($obj, $this->elements);
        if ($index !== false) {
            return $index;
        } else {
            return -1;
        }
    }

    public function isEmpty() {
        return $this->size == 0;
    }

    public function sort() {
        sort($this->elements);
        return $this->elements;
    }

    public function reset() {
        $this->elements = array();
        $this->size = 0;
    }

    public function size() {
        return $this->size;
    }

    private function isInteger($toCheck) {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}
$list = new ArrayList();
$list->add(3);
$list->add(2);
$list->add(1);
echo $list->get(1);


?>