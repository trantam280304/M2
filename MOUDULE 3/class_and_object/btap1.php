<form action="" method="post">
    <label>Nhập số A:</label>
    <input type="number" name="a" placeholder="Nhập số a" ><br><br>
    <label>Nhập số B:</label>
    <input type="number" name="b" placeholder="Nhập số b" ><br><br>
    <label>Nhập số C:</label>
    <input type="number" name="c" placeholder="Nhập số c" ><br><br>
    <input type="submit" value="Tính">
</form>

<?php
class Tinh{
    public $a;
    public $b;
    public $c;
    
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return (-$this->b + sqrt(($this->b * $this->b) - (4 * $this->a * $this->c))) / (2 * $this->a);
    }

    public function getRoot2()
    {
        return (-$this->b - sqrt(($this->b * $this->b) - (4 * $this->a * $this->c))) / (2 * $this->a);
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $tinh = new Tinh($a, $b, $c);
    $delta = $tinh->getDiscriminant();
    $r1 = $tinh->getRoot1();
    $r2 = $tinh->getRoot2();

    if ($delta > 0) {
        echo "x1 = " . $r1 . "<br>";
        echo "x2 = " . $r2 . "<br>";
    } else if ($delta == 0) {
        echo "x = " . $r1 . "<br>";
    } else {
        echo "Phương trình vô nghiệm";
    }
}
?>

