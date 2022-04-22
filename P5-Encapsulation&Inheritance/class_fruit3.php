<?php
    class Fruit3 {
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo 'This is a ' . $this->name . ' and the color is ' . $this->color . '.<br>';
        }
    }

    class  Strawberry extends Fruit3 {
        public function message() {
            echo 'Am I a fruit or a berry?';
        }
    }

    $strawberry = new Strawberry('strawberry', 'red');
    $strawberry->intro();
    $strawberry->message();