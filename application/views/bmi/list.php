<div id="page-content-wrapper">
<div class="container">
<h2>LIST BMI PASIEN</h2>
<table class="table">
<tr>
<th>ID</th>
<th>Tanggal</th>
<th>Berat</th>
<th>Tinggi</th>
<th>BMI</th>
<th>Status_BMI</th>
<th>Catatan</th>
<th>PasienID</th>
<th>Detail</th>
</tr>
<!-- Menampilkan data dengan foreach/ atau menampilkan array dengan perulangan -->
<?php foreach ($patiens as $patien) : ?>
<tr>
    <td><?php echo $patien->id ?></td>
    <td><?php echo $patien->tanggal ?></td>
    <td><?php echo $patien->berat ?></td>
    <td><?php echo $patien->tinggi ?></td>
    <td><?php echo $patien->bmi ?></td>
    <td><?php echo $patien->status_bmi ?></td>
    <td><?php echo $patien->catatan ?></td>
    <td><?php echo $patien->pasien_id ?></td>
    <td>
    <a href="<?php echo "detail/$patien->id" ?>">
    Lihat Detail
    </a>
    </td>
</tr>
<?php endforeach ?>
</table>
</div>
</div>