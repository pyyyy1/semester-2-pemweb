<?php

class Blog extends CI_controller {
    public function index() {
        $this->load->view('blog/index');
    }
    
    public function add() {
        echo 'Halaman Tambah Blog';
    }
}