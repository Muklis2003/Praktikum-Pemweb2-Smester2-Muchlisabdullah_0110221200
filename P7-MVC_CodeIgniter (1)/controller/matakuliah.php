<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Matakuliah extends CI_Controller {
        public function index() {
            $this->load->model('Matakuliah_model', 'matkul1');
            $this->matkul1->kode='JK201';
            $this->matkul1->nama='Jaringan Komputer';
            $this->matkul1->sks='3';

            $this->load->model('Matakuliah_model', 'matkul2');
            $this->matkul2->kode='UI202';
            $this->matkul2->nama='UI/UX';
            $this->matkul2->sks='3';

            $this->load->model('Matakuliah_model', 'matkul3');
            $this->matkul3->kode='PW203';
            $this->matkul3->nama='Pemrograman Web 2';
            $this->matkul3->sks='3';

            $this->load->model('Matakuliah_model', 'matkul4');
            $this->matkul4->kode='BD204';
            $this->matkul4->nama='Basis Data';
            $this->matkul4->sks='4';

            $this->load->model('Matakuliah_model', 'matkul5');
            $this->matkul5->kode='PK201';
            $this->matkul5->nama='PPKN';
            $this->matkul5->sks='2';

            $this->load->model('Matakuliah_model', 'matkul6');
            $this->matkul6->kode='SP206';
            $this->matkul6->nama='Statistika & Probabilitas';
            $this->matkul6->sks='2';

            $this->load->model('Matakuliah_model', 'matkul7');
            $this->matkul7->kode='KE207';
            $this->matkul7->nama='Komunikasi Efektif';
            $this->matkul7->sks='2';

            $this->load->model('Matakuliah_model', 'matkul8');
            $this->matkul8->kode='BG208';
            $this->matkul8->nama='Bahasa Inggris 1';
            $this->matkul8->sks='2';

            $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8];
            $data['list_matkul'] = $list_matkul;

            $this->load->view('header');
            $this->load->view('view_matakuliah', $data); 
            $this->load->view('footer');
        }
    }
?>