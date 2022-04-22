<?php
    class Dispenser {
        protected $volume;
        public $hargaSegelas;
        public $volumeGelas = 250;
        private $panjang;
        private $lebar;
        private $tinggi;
        public $jumlahGelas;

        public function __construct($panjang, $lebar, $tinggi, $jumlahGelas) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
            $this->tinggi = $tinggi;
            $this->jumlahGelas = $jumlahGelas;
            echo '<b>Ukuran Wadah</b>';
            echo '<br>Panjang: ' . $panjang . ' cm';
            echo '<br>Lebar: ' . $lebar . ' cm';
            echo '<br>Tinggi: ' . $tinggi . ' cm';
        }
        
        public function volumeWadah() {
            return $this->panjang * $this->lebar * $this->tinggi;
        }

        private function totalVolumeGelas() {
            return $this->volumeGelas * $this->jumlahGelas;
        }
        
        public function totalVolume() {
            if ($this->totalVolumeGelas() > $this->volumeWadah()) {
                return 'Minuman tidak mencukupi';
            } else {
                return $this->totalVolumeGelas() . 'ml';
            }
        }
        
        public function volumeSebelumnya() {
            return $this->volumeWadah();
        }
        
        private function volumeSesudahnya() {
            return $this->volumeWadah() - $this->totalVolumeGelas();
        }
        
        public function vSesudahnya() {
            if ($this->volumeSesudahnya() <= 0 ) {
                return 'Habis';
            } else {
                return $this->volumeSesudahnya() . 'ml';
            }
        }
    }
    
    class Harga extends Dispenser {
        public function __construct($jumlahGelas, $hargaSegelas) {
            $this->jumlahGelas = $jumlahGelas;
            $this->hargaSegelas = $hargaSegelas;
            echo '<br><br>';
            echo '<b>Harga</b>';
            echo '<br>Harga satu gelas: Rp' . $hargaSegelas . '<br>';
        }
        
        public function hargaMinuman() {
            return $this->hargaSegelas * $this->jumlahGelas;
        }
    }
    
    $detail = new Dispenser(50, 20, 10, 16);
    $harga = new Harga(16, 5000);
    echo '<br>Jumlah gelas: ' . $detail->jumlahGelas;
    echo '<br>Total volume: ' . $detail->totalVolume();
    echo '<br><b>Harga yang harus dibayar</b>: Rp' . $harga->hargaMinuman() . '<br>';
    echo '<br><b>Volume wadah</b>';
    echo '<br>Volume wadah sebelumnya: ' . $detail->volumeSebelumnya() . 'ml';
    echo '<br>Volume wadah sesudahnya: ' . $detail->vSesudahnya();
?>