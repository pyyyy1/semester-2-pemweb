<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Form Belanja</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <!-- CSS Style -->
    <style>
        body {
            background-image: url(images/bg_formbelanja.jpeg);
            font-family: Groovy !important;zzzzzzz
        }
    </style>
    
    <!-- Navbar -->
    <div class="container-fluid bg-light">
    <div class="row">
        <div class="col">
            <h3 class="text-dark p-2">Form Belanja Online</h3>
        </div>
    </div>    
    </div>

    <!-- Navbar -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-8"><hr>
            <form method="POST" action="form_belanja.php" class="form-horizontal">
                <h2 class="p-2">Belanja Online</h2><hr>
                <div class="form-group row">
                    <label for="nama__customer" class="col-sm-4 col-form-label"><b>Nama Customer</b></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="namacustomer" placeholder="Nama Customer">
                    </div>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0"><b>Pilih Produk</b></legend>
                    <div class="col-sm-8">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="TV" name="produk" value="TV" required>
                        <label class="form-check-label" for="TV">TV</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="Kulkaz" name="produk" value="Kulkas" required>
                        <label class="form-check-label" for="Kulkaz">Kulkas</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="MesinCuci" name="produk" value="Mesin Cuci" required>
                        <label class="form-check-label" for="MesinCuci">Mesin Cuci</label>
                    </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <label for="jumlah__" class="col-sm-4 col-form-label"><b>Jumlah</b></label>
                    <div class="col-sm-5">
                        <input type="number" for="produk__" class="form-control" name="jumlah" placeholder="Jumlah" value="" required>
                    </div>
                </div>

                <button href="" type="submit" class="btn btn-success pl-5 pr-5" name="proses">Kirim</button>
            </form>
            </div>

            <div class="col-4 " >
                <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-primary p-3 text-white">Daftar Harga</li>
                    <li class="p-2">TV : 4.200.000</li>
                    <li class="p-2 bg-light">Kulkas : 3.100.000</li>
                    <li class="p-2">MESIN CUCI: 3.800.000</li>
                    <li class="bg-primary p-3 text-white">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light mt-5 mb-5 p-5 mr-5">
        <h1 class="animate__animated animate__pulse animate__infinite infinite animate__delay-4s 4s">Hasilnya Adalah :</h1><br>
        
        <?php
          $proses= $_POST['proses']; 
          $nama_customer = $_POST['namacustomer'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];

          echo '<br/>Nama Customer: '.$nama_customer;
          echo '<br/>Pilihan Produk : '.$produk;
          echo '<br/>Jumlah Beli : '.$jumlah;
          if($produk == "TV") {
            echo "<br>Total Belanja : Rp. " . 4200000 * $jumlah;
          }
          else if ($produk == "Kulkas") {
            echo "<br>Total Belanja : Rp. " . 3100000 * $jumlah;
          }
          else {
            echo "<br>Total Belanja : Rp. " . 3800000 * $jumlah;
          }
          ?>
    </div>

</body>
</html>