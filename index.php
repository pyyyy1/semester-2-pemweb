<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome || Form Pengisian Indeks Massa Tubuh (BMI)</title>

    <!-- Icons font CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Animasi -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Font Awesome Google -->
    <script src="https://kit.fontawesome.com/9656acaa9d.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <!-- CSS Style -->
    <style>
        body {
            background-image: url(images/bg.jpeg);
            font-family: Groovy !important;zzzzzzz
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid;
            text-align: left;
            padding: 8px;
        }
    </style>

    <!-- Content -->
    <div class="container-fluid" style="max-width:1366px;">
        <div class="row pt-5">
            <div class="col-6">
                <form class="form-horizontal p-5 shadow h-100" style="background-color:#f1f2f6;" method="GET" action="HalamanBMI.php">
                    <div class="text-center">
                        <h3 class="animate__animated animate__heartBeat animate__infinite infinite animate__delay-3s 3s mb-5">Form Isian Indeks Massa Tubuh (BMI)</h3>
                    </div>
                    <div class="form-group row">
                        <label for="namalengkap" class="col-sm-4 col-form-label"><b>Nama Lengkap</b></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama__lengkap" required>
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Berat Barat</b></label>
                    <div class="col-sm-6">
                        <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="berat__" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Kg</div>
                        </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Tinggi Badan</b></label>
                    <div class="col-sm-6">
                        <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="tinggi__" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Cm</div>
                        </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="form-group row">
                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Umur</b></label>
                    <div class="col-sm-6">
                        <div class="input-group mb-2 mr-sm-2">
                        <input type="text" class="form-control" name="umur__" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text">Thn</div>
                        </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="row">
                    <legend class="col-form-label col-sm-4"><b>Jenis Kelamin</b></legend>
                    <div class="col-sm-8">
                    <div class="form-check mr-auto">
                        <input class="form-check-input" type="radio" id="laki" name="jenis__kelamin" value="Laki-Laki" required>
                        <label class="form-check-label mr-5" for="laki">
                        Laki-Laki
                        </label>
                        <input class="form-check-input" type="radio" id="perempuan" name="jenis__kelamin" value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">
                        Perempuan
                        </label>
                    </div>
                    </div>
                    </div><br>
                    <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="Send" name="proses"/>
                    </div>
                </form>
                </div>
                <div class="col-6">
                <div class="shadow p-5 h-100" style="background-color:#f1f2f6;">
                    <h3 class="mb-3 pt-5 text-center">Output Form</h3><br>
                <table>
                    <thead class="text-center fixed">
                    <tr>
                    <th class="text-center pt-5"><h5><b>Hasil Evaluasi BMI</h5><br>
                        <div class="row ml-2 fixed">
                            <label for="namalengkap"><b>Nama Lengkap</b></label>
                        </div>
                        <div class="row ml-2">
                            <label class="berat/tinggi badan"><b>Berat / Tinggi Badan</b></label>
                        </div>
                        <div class="row ml-2">
                            <label for="umur"><b>Umur</b></label>
                        </div>
                        <div class="row ml-2">
                            <label for="bmi"><b>BMI</b></label>
                        </div>
                        <div class="row ml-2">
                            <label for="hasil"><b>Hasil</b></label>
                        </div>
                    </th>
                    </tr>
                    </thead>
                </table>
                    
                <?php
                class bmiPasien {
                    public $nama,
                        $berat,
                        $tinggi,
                        $umur,
                        $jenisKelamin;
                        
                    public function hasilBMI() {
                    return "<b>Nama : $this->nama   <br><br>
                            Berat Badan : $this->berat <br><br>                  
                            Tinggi Badan : $this->tinggi <br><br>
                            Umur : $this->umur <br><br>
                            Jenis Kelamin : $this->jenisKelamin</b>"; 
                    }
                    public function statusBMI() {

                    }
                }
                if (isset($_GET["nama__lengkap"])) {
                    $bmi = new bmiPasien;
                    $bmi->nama = $_GET["nama__lengkap"];
                    $bmi->berat = $_GET["berat__"];
                    $bmi->tinggi = $_GET["tinggi__"];
                    $bmi->umur = $_GET["umur__"];
                    $bmi->jenisKelamin = $_GET["jenis__kelamin"];
                    echo $bmi->hasilBMI();
                }
                ?>
                </div>
            </div>
        </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>