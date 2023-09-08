<?php

class Point2D {
    public float $x;
    public float $y;

    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float {
        return $this->x;
    }

    public function getY(): float {
        return $this->y;
    }

    public function setX(float $x): void {
        $this->x = $x;
    }

    public function setY(float $y): void {
        $this->y = $y;
    }

    public function setXY(float $x, float $y): void {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(): array {
        return [$this->x, $this->y];
    }

    public function toString(): string {
        return "Point2D (x = $this->x, y = $this->y)";
    }
}

class Point3D extends Point2D {
    public float $z;

    public function __construct(float $x, float $y, float $z) {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ(): float {
        return $this->z;
    }

    public function setZ(float $z): void {
        $this->z = $z;
    }

    public function setXYZ(float $x, float $y, float $z): void {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ(): array {
        return [$this->x, $this->y, $this->z];
    }

    public function toString(): string {
        return "Point3D(x = $this->x, y = $this->y, z = $this->z)";
    }
}

$point2D = new Point2D(2.5, 3.7);
echo $point2D->toString();
echo "<br>";

$point3D = new Point3D(1.2, 4.6, 7.8);
echo $point3D->toString();
?>
?>