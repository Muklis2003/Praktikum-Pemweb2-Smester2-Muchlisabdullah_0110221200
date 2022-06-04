<?php
    class Mahasiswa_model extends CI_Model {
        public $id;
        public $nim;
        public $nama;
        public $gender;
        public $ipk;
        public $predikat;
        
        public function predikat() {
            $predikat = ($this->ipk >= 3.75)? 'Cumlaude' : 'Baik';
            return $this->predikat = $predikat;
        }
    }
?>