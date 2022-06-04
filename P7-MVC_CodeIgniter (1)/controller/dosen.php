<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Dosen extends CI_Controller {
        public function index() {
            $this->load->model('Dosen_model', 'dosen1');
            $this->dosen1->id=1;
            $this->dosen1->nidn='2012041401';
            $this->dosen1->nama='Ahmad Fauzi';
            $this->dosen1->gender='L';
            $this->dosen1->pendidikan='S2 Informatika ITB';

            $this->load->model('Dosen_model', 'dosen2');
            $this->dosen2->id=2;
            $this->dosen2->nidn='2012041402';
            $this->dosen2->nama='Dani Afnan';
            $this->dosen2->gender='L';
            $this->dosen2->pendidikan='S2 Ilmu Komputer UI';

            $this->load->model('Dosen_model', 'dosen3');
            $this->dosen3->id=3;
            $this->dosen3->nidn='2012041403';
            $this->dosen3->nama='Farah Izmi';
            $this->dosen3->gender='P';
            $this->dosen3->pendidikan='S2 Sastra UGM';

            $list_dosen = [$this->dosen1, $this->dosen2, $this->dosen3];
            $data['list_dosen'] = $list_dosen;
            
            $this->load->view('header');
            $this->load->view('view_dosen', $data);
            $this->load->view('footer');
        }
    }
?>