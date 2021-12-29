<div id="page-content-wrapper">
<div class="container">
<h2>LIST PASIEN</h2>
<table class="table">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>gender</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Email</th>
<th>Action</th>
</tr>
<!-- Menampilkan data dengan foreach/ atau menampilkan array dengan perulangan -->
<?php foreach ($patiens as $patien) : ?>
<tr>
    <td><?php echo $patien->kode ?></td>
    <td><?php echo $patien->nama ?></td>
    <td><?php echo $patien->gender ?></td>
    <td><?php echo $patien->tmp_lahir ?></td>
    <td><?php echo $patien->tgl_lahir ?></td>
    <td><?php echo $patien->email ?></td>
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