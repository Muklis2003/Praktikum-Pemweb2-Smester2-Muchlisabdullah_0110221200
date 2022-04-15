<?php
class fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and color is {$this->color}.";
    }
}

// Strawberry is inherited from fruit
class strawberry extends fruit {
    public function message() {
        echo "Am i a fruit or a berry?";
    }
}
$strawberry = new strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>