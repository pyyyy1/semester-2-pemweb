<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Variable User</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <!-- CSS Style -->
    <style>
        body {
            background-image: url(images/bg_formvariable.png);
            font-family: Groovy !important;zzzzzzz
        }
    </style>

    <!-- Navbar -->
    <div class="container-fluid bg-light">
    <div class="row">
        <div class="col">
            <h3 class="text-dark p-2">Variable User</h3>
        </div>
    </div>    
    </div>

    <!-- Isi Konten -->
    <div class="container bg-light">
        <form class="form-horizontal m-5 pt-5 putih">
        <h2 class="mb-5"><b>Variable User</b></h2><hr>
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
            <label for="pekerjaan__anda" class="col-sm-3 col-form-label"><b>Pekerjaan Anda</b></label>
            <div class="col-sm-7">
                <select name="pekerjaan__anda" class="form-control" name="pekerjaan__anda" placeholder="Programmaer">
                    <option value="Programmer">Programmer</option>
                    <option value="IT Consultant">IT Consultant</option>
                    <option value="Designer">Designer</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                </select>
            </div>
        </div><br>
        <div class="form-group row">
            <label for="umur__anda" class="col-sm-3 col-form-label"><b>Umur</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="umur__anda" placeholder="Umur Anda">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="berat__badan" class="col-sm-3 col-form-label"><b>Berat Badan</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="berat__badan" placeholder="Berat Badan">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="tinggi__badan" class="col-sm-3 col-form-label"><b>Tinggi Badan</b></label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="tinggi__badan" placeholder="Tinggi Badan">
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
        $nama_lengkap = $_GET['nama__lengkap'];
        $pekerjaan__anda = $_GET['pekerjaan__anda'];
        $umur__anda = $_GET['umur__anda'];
        $berat__badan = $_GET['berat__badan'];
        $tinggi__badan = $_GET['tinggi__badan'];
        echo 'Proses            : '.$proses;
        echo '<br/>Nama Lengkap : '.$nama_lengkap;
        echo '<br/>Pekerjaan    : '.$pekerjaan__anda;
        echo '<br/>Umur         : '.$umur__anda. 'Tahun';
        echo '<br/>Berat Badan  : '.$berat__badan. 'Kg';
        echo '<br/>Tinggi Badan : '.$tinggi__badan. 'Cm';
        echo "<br/>Hello $nama_lengkap Apa Kabar ? Sudah Makan Belum ?";
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