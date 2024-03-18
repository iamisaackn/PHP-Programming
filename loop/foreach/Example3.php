<?php
// The foreach Loop on Objects

// Create a class
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("Red", "Lexus");

foreach($myCar as $x => $y) {
    echo"$x : $y <br>";
}
?>