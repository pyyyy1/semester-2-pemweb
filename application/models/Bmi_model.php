<?php
class Bmi_model extends CI_Model{
    // membuat property
    public $berat, $tinggi;
    // membuat method menghitung nilai bmi
    public function hitungBMI(){
        // logika mendapatkan nilai berat badan
        $tinggi_tubuh = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_tubuh,2);
        return $bmi;
    }
    // untuk mengetahui berat badan
    public function statusBMI(){
        if ($this->hitungBMI() < 18.5){
            return "Kekurangan Berat Badan";
        }
        else if ($this->hitungBMI() < 25.0){
            return "Normal (ideal)";
        }
        else if ($this->hitungBMI() < 30.0){
            return "kelebihan berat badan";
        }
        else{
            return "Kegemukan (obesitas)";
        }
    }
}
?>