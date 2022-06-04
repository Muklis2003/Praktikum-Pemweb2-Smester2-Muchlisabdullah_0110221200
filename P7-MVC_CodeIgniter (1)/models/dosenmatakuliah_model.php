<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    require_once('Matakuliah_model.php');
    require_once('Dosen_model.php');

    class DosenMatakuliah extends CI_Model {
        public $semester;
        public $dosen;
        public $matakuliah;
        public $hari;
        public $ruangan;
    }
?>