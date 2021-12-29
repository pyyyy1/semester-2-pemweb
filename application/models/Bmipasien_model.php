<?php
class Bmipasien_model extends CI_Model{
    // siaplan property
    public $berat;
    public $tinggi;
    // membuat method menghitung nilai bmi
    public function nilaiBMI(){
        // logika mendapatkan nilai berat badan
        $tinggi_meter = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_meter,2);
        return $bmi;
    }
    // untuk mengetahui berat badan
    public function statusBMI(){
        if ($this->nilaiBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }
        else if ($this->nilaiBMI() < 25.0){
            return "Normal (ideal)";
        }
        else if ($this->nilaiBMI() < 30.0){
            return "kelebihan berat badan";
        }
        else{
            return "Kegemukan (obesitas)";
        }
    }
    // public $id, $tanggal, $pasien, $bmi;
    public function getAll(){
        // query database, ngambil data table dari phpmyadmin
        $query = $this->db->get('bmi_pasien');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('bmi_pasien', ['id' => $id]);
        return $query->row();
    }
    
    public function save($data){
        $this->berat=$data['berat'];
        $this->tinggi=$data['tinggi'];

        $data['bmi']=$this->nilaiBMI();
        $data['status_bmi']=$this->statusBMI();

        $sql = "INSERT INTO bmi_pasien 
        (tanggal,pasien_id,berat,tinggi,catatan,bmi,status_bmi) VALUES (?,?,?,?,?,?,?)";
        
        $this->db->query($sql,$data);

        $insert_id = $this->db->insert_id();
        return $this->findById($insert_id);
    }
        public function findById($id){
            $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
            return $query->row();
        }
}
?>