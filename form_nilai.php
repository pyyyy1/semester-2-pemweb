<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
               
    <div class="container">
      <form class="form-horizontal m-5 pt-5 shadow" style="background-color:#f1f2f6;">

        <div class="text-center">
          <h4 class="mb-5 text-danger text-mg">Form Nilai Siswa</h4>
        </div>

        <div class="container">
          <div class="form-group row">
            <label for="nama__lengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama__lengkap" placeholder="Nama Lengkap" >
            </div>
          </div>
        </div><br>

        <div class="form-group row">
          <label for="mata__kuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select type="text" class="form-control" name="mata__kuliah" placeholder="Pemrograman Web 2" >
              <option value="WEB">Pemrograman Web 2</option>
              <option value="BD">Basis Data</option>
              <option value="UIUX">User Interface & User Experience</option>
              <option value="JARKOM">Jaringan Komputer</option>
              <option value="DDP">Dasar-Dasar Pemrogramman</option>
              <option value="SO">Sistem Operasi</option>
            </select>
          </div>
        </div><br>

          <div class="form-group row">
            <label for="nilai__uts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control" name="nilai__uts" >
            </div>
          </div><br>

          <div class="form-group row">
            <label for="nilai__uas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control " name="nilai__uas" >
            </div>
          </div><br>

          <div class="form-group row">
            <label for="nilai__tugas" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control" name="nilai__tugas" >
            </div>
          </div>

          <div class="text-center p-5">
            <input class="btn btn-danger" type="submit" value="Simpan" name="proses"/>
          </div>
        </form>
      </div>

      <div class="container bg-light mt-5 mb-5 p-5 shadow">
        <h1 class="animate__animated animate__pulse animate__infinite	infinite animate__delay-4s	4s">Ini HASILNYA!</h1>
        <br>
        <?php
          $proses= $_GET['proses']; // untuk ke input
          $nama_siswa = $_GET['nama__lengkap']; // untuk nama
          $mata_kuliah = $_GET['mata__kuliah'];
          $nilai_uts = $_GET['nilai__uts'];
          $nilai_uas = $_GET['nilai__uas'];
          $nilai_tugas = $_GET['nilai__tugas'];
          echo 'Proses : '.$proses;
          echo '<br/>Nama : '.$nama_siswa;
          echo '<br/>Mata Kuliah : '.$mata_kuliah;
          echo '<br/>Nilai UTS : '.$nilai_uts;
          echo '<br/>Nilai UAS : '.$nilai_uas;
          echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        ?>
      </div>

</body>
</html>