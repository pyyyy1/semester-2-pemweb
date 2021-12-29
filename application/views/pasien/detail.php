<div id="page-content-wrapper">
<div class="container mt-3">
<h2>DETAIL PASIEN</h2>
<table class="table">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>gender</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
</tr>
<!-- Menampilkan data dengan foreach/ atau menampilkan array dengan perulangan -->
<tr>
    <td><?php echo $patien->kode; ?></td>
    <td><?php echo $patien->nama; ?></td>
    <td><?php echo $patien->gender; ?></td>
    <td><?php echo $patien->tmp_lahir; ?></td>
    <td><?php echo $patien->tgl_lahir; ?></td>
</tr>
</table>
</div>
</div>