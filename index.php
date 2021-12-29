<!DOCTYPE html>
<html lang="en">

<head>
      <!-- ***** Header Area Start ***** --
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Form Nilai Siswa</title>
    <link rel="icon" type="image/png" href="icons/sttnf.png"/>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body background="images/bg-01.png"> 
    <div class="container-login100" style="background-image: url('images/bg-01.png');">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"><b>ISI PENAWARAN LOWONGAN KERJA ANDA</b></h2>
                    <form method="GET" action="nilai_siswa.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama siswa</label>
                                    <input class="input--style-4" type="text" name="nama__lengkap" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIM</label>
                                    <input class="input--style-4" type="text" name="nim__" required>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nilai UTS</label>
                                    <input class="input--style-4" type="number" name="nilai__uts" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nilai UAS</label>
                                    <input class="input--style-4" type="number"  name="nilai__uas" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="matakuliah">Mata kuliah</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="mata__kuliah">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Dasar-Dasar Pemrograman</option>
                                    <option>pemograman web lanjutan</option>
                                    <option>basis data</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIlai Praktikum</label>
                                    <input class="input--style-4" type="number" name="nilai__tugas" required>
                                </div>
                            </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <button class="btn btn--radius-2 btn--blue" type="submit">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->