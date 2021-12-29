<div class="container">
<h3>Data Periksa BMI Pasien</h3>
#IDPeriksa : <?= $data_periksa ->id?>
<br/>
Tanggal : <?= $data_periksa -> tanggal?>
<br/>
ID Pasien : <?=$data_periksa->pasien_id?>
<br/>
Berat Badan : <?=$data_periksa->berat?>
<br/>
Tinggi Badan : <?=$data_periksa->tinggi?>
<br/>
BMI : <?=$data_periksa->bmi?>
<br/>
BMI Status : <?=$data_periksa->status_bmi?>
<br/>
Catatan : <?=$data_periksa->catatan?>
<br/>
Nama Pasien : <?=$pasien->nama?>
<br/>
Tempat Lahir : <?=$pasien->tmp_lahir?>
<br/>
Tanggal Lahir : <?=$pasien->tgl_lahir?>
</div>
