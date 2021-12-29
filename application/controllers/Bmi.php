<?php

class Bmi extends CI_Controller {
    public function bmipasien(){
        $this->load->model('pasien_model','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='P001';
        $this->pasien1->nama='M.Ilham';
        $this->pasien1->tmp_lahir='Jakarta';
        $this->pasien1->tgl_lahir='12 februari 2001';
        $this->pasien1->gender='L';
        
        $this->load->model('pasien_model','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='P001';
        $this->pasien2->nama='Rizki';
        $this->pasien2->tmp_lahir='Depok';
        $this->pasien2->tgl_lahir='10 November 2004';
        $this->pasien2->gender='L';
    
        $this->load->model('pasien_model','pasien3');
        $this->pasien3->id=3;
        $this->pasien3->kode='P003';
        $this->pasien3->nama='Hannn';
        $this->pasien3->tmp_lahir='Jakarta';
        $this->pasien3->tgl_lahir='30 Desember 2001';
        $this->pasien3->gender='L';
    
    //=========================================================
        $this->load->model('bmipasien_model', 'pasienbmi1');
        $this->pasienbmi1->id=1;
        $this->pasienbmi1->tanggal='2021-05-6';
        $this->pasienbmi1->pasien='M.Ilham';
        $this->pasienbmi1->bmi='';
    
        $this->load->model('bmipasien_model', 'pasienbmi2');
        $this->pasienbmi2->id=2;
        $this->pasienbmi2->tanggal='2021-05-3';
        $this->pasienbmi2->pasien='Rizki';
        $this->pasienbmi2->bmi='';
    
        $this->load->model('bmipasien_model', 'pasienbmi3');
        $this->pasienbmi3->id=3;
        $this->pasienbmi3->tanggal='2021-05-01';
        $this->pasienbmi3->pasien='Hannn';
        $this->pasienbmi3->bmi='';
    
    //=========================================================
        $this->load->model('bmi_model', 'bmi1');
        $this->bmi1->berat=50;
        $this->bmi1->tinggi=150;
        $this->bmi1->hitungBMI(); // sebenernya cukup ini aja gausa kasih di bmi2 3
        $this->bmi1->statusBMI(); // ini
    
        $this->load->model('bmi_model', 'bmi2');
        $this->bmi2->berat=70;
        $this->bmi2->tinggi=172;
        // $this->bmi1->nilaiBMI(); 
        // $this->bmi1->statusBMI();
        
        $this->load->model('bmi_model', 'bmi3');
        $this->bmi3->berat=40;
        $this->bmi3->tinggi=170;
        // $this->bmi1->nilaiBMI(); 
        // $this->bmi1->statusBMI();
        
        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $list_bmipasien = [$this->pasienbmi1, $this->pasienbmi2, $this->pasienbmi3];
        $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
        
        $data['list_pasien']=$list_pasien;
        $data['list_bmipasien']=$list_bmipasien;
        $data['list_bmi']=$list_bmi;
        
        $this->load->view('layouts/header');
        $this->load->view('bmi/bmipasien', $data);
        $this->load->view('layouts/footer');
        }
        // public function index(){
        //     // load atau memanggil model
        // $this->load->model('pasien_model','pasien1');
    
        // // cara pake model
        // $this->pasien1->id='1';
        // $this->pasien1->nama='Makmur';
        // $this->pasien1->kode='P001';
        // $this->pasien1->gender='L';
    
        // // Load model 2
        // $this->load->model('pasien_model','pasien2');
        // // cara pake model
        // $this->pasien2->id='2';
        // $this->pasien2->nama='Mahmud';
        // $this->pasien2->kode='P002';
        // $this->pasien2->gender='L';
    
        // // Simpan object kedalam array
        // $list_pasien = [$this->pasien1, $this->pasien2];
    
        // // siapkan data yang ingin di kirim
        // $data['list_pasien'] = $list_pasien;
        // // render vie
        // $this->load->view('layouts/header');
        // $this->load->view('bmi/index',$data);
        // $this->load->view('layouts/footer');
        // }
        public function list(){
            // load model
            $this->load->model('bmipasien_model');
            // memanggil model
            $patiens = $this->bmipasien_model->getAll();
            $data['patiens'] = $patiens;
            // kirim ke view
            $this->load->view('layouts/header');
            $this->load->view('bmi/list', $data);
            $this->load->view('layouts/footer');
        }
        public function detail($id){
            // load model pasien
            $this->load->model('bmipasien_model');
            // memanggil method gedbyid dengan mengirim parameter id
            $patien = $this->bmipasien_model->getById($id);
    
            $data['patien'] = $patien;
    
            $this->load->view('layouts/header');
            $this->load->view('bmi/detail', $data);
            $this->load->view('layouts/footer');
    
        }
        public function periksa(){
            $data['tanggal']=date('Y-m-d');
            $this->load->model('pasien_model');
            // memanggil model
            $list_pasien = $this->pasien_model->getAll();
            $data['list_pasien'] = $list_pasien;
            $this->load->view('layouts/header');
            $this->load->view('bmi/periksa', $data);
            $this->load->view('layouts/footer');
        }
        public function simpan(){
            $data_periksa['tanggal']=$this->input->post('tanggal');
            $data_periksa['pasien_id']=$this->input->post('pasien_id');
            $data_periksa['berat']=$this->input->post('berat');
            $data_periksa['tinggi']=$this->input->post('tinggi');
            $data_periksa['catatan']=$this->input->post('catatan');

            $this->load->model('bmipasien_model');
            $data_periksa = $this->bmipasien_model->save($data_periksa);

            $data['data_periksa'] = $data_periksa;
            $this->load->model('pasien_model','pasien');

            $data['pasien'] = $this->pasien->getById($data_periksa->pasien_id);
            $this->load->view('layouts/header');
            $this->load->view('bmi/view', $data);
            $this->load->view('layouts/footer');
        }
}

?>