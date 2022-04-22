<?php
    class Fruit2 {
        public $name;
        public $color;
        public $weight;
        
        function set_name($n) {
            $this->name = $n;
        }
    
        protected function set_color($n) {
            $this->color = $n;
        }
        
        private function set_weight($n) {
            $this->weight = $n;
        }
    }
    
    $mango = new Fruit2();
    $mango->set_name('Mango'); // Success
    // $mango->set_color('Yellow'); // Error
    // $mango->set_weight('300'); // Error
?>