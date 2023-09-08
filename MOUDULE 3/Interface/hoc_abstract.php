<?php
//cu phap lop truu tuong
abstract class TenClass
{
    // noi dung
}
//cu phap phuong thuc truu tuong
abstract class AbstractClass
{
    abstract public function tenPhuongthuc();
}

// vis du abstract
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
// phuong thuc truu tuong
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "hoooooo!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meo meo meo meo";
    }
}
$dog = new Dog("baobao");
echo $dog->makeSound(); 
echo '<br>';
$cat = new Cat("chibaoooo");
echo $cat->makeSound(); 