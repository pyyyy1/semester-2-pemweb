<?php
class Pasien extends CI_Controller{
    

    // ===================================================================================
    public function list(){
        // load model
        $this->load->model('pasien_model');
        // memanggil model
        $patiens = $this->pasien_model->getAll();
        $data['patiens'] = $patiens;
        // kirim ke view
        $this->load->view('layouts/header');
        $this->load->view('pasien/list', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        // load model pasien
        $this->load->model('pasien_model');
        // memanggil method gedbyid dengan mengirim parameter id
        $patien = $this->pasien_model->getById($id);

        $data['patien'] = $patien;

        $this->load->view('layouts/header');
        $this->load->view('pasien/detail', $data);
        $this->load->view('layouts/footer');

    }
}
?>