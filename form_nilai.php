<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Form Nilai Siswa</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    
    <!-- CSS Style -->
    <style>
        body {
            background-color: #b5c8df;
            font-family: Groovy !important;
        }
        .wrapper {
            margin: 0 auto;
        }

        .wrapper--w960 {
            max-width: 960px;
        }

        .wrapper--w780 {
            max-width: 780px;
        }

        .wrapper--w680 {
            max-width: 680px;
        }
    </style>

    <!-- Navbar -->
    <div class="container-fluid bg-light">
    <div class="row">
        <div class="col">
            <h3 class="text-dark p-2">Penilaian</h3>
        </div>
    </div>    
    </div>

    <!-- Isi Konten -->
    <div class="container bg-light">
        <form class="form-horizontal m-5 pt-5 putih">
        <h2 class="mb-5"><b>Formulir Nilai Siswa</b></h2><hr>
        <div class="text-center pt-5">
    </div>
    <div class="container">
        <div class="form-group row">
            <label for="nama__lengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nama__lengkap" placeholder="Nama Lengkap">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="mata__kuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
            <div class="col-sm-7">
                <select name="mata__kuliah" class="form-control" name="mata__kuliah" placeholder="Dasar-Dasar Pemrograman">
                    <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="User Interface & User Experience">User Interface & User Experience</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                    <option value="Pengantar Teknologi Informasi">Pengantar Teknologi Informasi</option>
                    <option value="Sistem Operasi">Sistem Operasi</option>
                </select>
            </div>
        </div><br>
        <div class="form-group row">
            <label for="nilai__uts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nilai__uts" placeholder="Nilai UTS">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="nilai__uas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nilai__uas" placeholder="Nilai UAS">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="nilai__tugas" class="col-sm-3 col-form-label"><b>Nilai Tugas / Praktikum</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nilai__tugas" placeholder="Nilai Tugas">
            </div>
        </div>
        <div class="text-center p-5">
            <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
        </div>
        </form>
        </div>
    </div>

    <!-- Hasil -->
    <div class="container bg-light mt-5 mb-5 p-5 putih">
        <h2 class="animate__animated animate__pulse animate__infinite	infinite animate__delay-4s	4s">Hasilnya Adalah :</h2><br>
    
    <?php
        $proses= $_GET['proses'];
        $nama_siswa = $_GET['nama__lengkap'];
        $mata_kuliah = $_GET['mata__kuliah'];
        $nilai_uts = $_GET['nilai__uts'];
        $nilai_uas = $_GET['nilai__uas'];
        $nilai_tugas = $_GET['nilai__tugas'];
        echo 'Proses            : '.$proses;
        echo '<br/>Nama Lengkap : '.$nama_siswa;
        echo '<br/>Mata Kuliah  : '.$mata_kuliah;
        echo '<br/>Nilai UTS    : '.$nilai_uts;
        echo '<br/>Nilai UAS    : '.$nilai_uas;
        echo '<br/>Nilai Tugas  : '.$nilai_tugas;
    ?>
    </div>

    <!-- Footer -->
    <div class="container-fluid bg-light">
    <div class="row">
        <div class="col">
            <h5 class="text-dark p-2">Develop By @ZhafiaRabbaniA</h5>
        </div>
    </div>    
    </div>
        
</body>
</html>