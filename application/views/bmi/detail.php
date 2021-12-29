<div id="page-content-wrapper">
<div class="container mt-3">
<h2>DETAIL PASIEN</h2>
<table class="table">
<tr>
<th>ID</th>
<th>Tanggal</th>
<th>Berat</th>
<th>Tinggi</th>
<th>BMI</th>
<th>Status_BMI</th>
<th>Catatan</th>
</tr>
<!-- Menampilkan data dengan foreach/ atau menampilkan array dengan perulangan -->
<tr>
    <td><?php echo $patien->id; ?></td>
    <td><?php echo $patien->tanggal; ?></td>
    <td><?php echo $patien->berat; ?></td>
    <td><?php echo $patien->tinggi; ?></td>
    <td><?php echo $patien->bmi; ?></td>
    <td><?php echo $patien->status_bmi; ?></td>
    <td><?php echo $patien->catatan; ?></td>
</tr>
</table>
</div>
</div>