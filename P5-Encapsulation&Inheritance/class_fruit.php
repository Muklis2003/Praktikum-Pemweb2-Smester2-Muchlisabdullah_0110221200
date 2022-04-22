<?php
    class Fruit1 {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruit1();
    $mango->name = 'Mango'; // Success
    $mango->color = 'Yellow'; // Error
    $mango->weight = '300'; // Error
?>