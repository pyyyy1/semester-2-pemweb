<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Form Pengisian Nilai</title>


    <!-- Icons font CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

    <body background="images/bg-01.png"> 
        <div class="container-login100" style="background-image: url('images/bg.png');">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="animate__animated animate__heartBeat animate__infinite infinite animate__delay-3s 3s"><b>MASUKAN DATA NILAI ANDA</b></h2><br>
                        <form method="GET" action="array_siswa.php">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nama Siswa</label>
                                        <input class="input--style-4" type="text" name="nama__lengkap" placeholder="Nama Siswa" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">NIM</label>
                                        <input class="input--style-4" type="text" name="nim__">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nilai UTS</label>
                                        <input class="input--style-4" name="nilai__uts" placeholder="Nilai UTS" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nilai UAS</label>
                                        <input class="input--style-4" name="nilai__uas" placeholder="Nilai UAS" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="matakuliah">Mata Kuliah</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="mata__kuliah" placeholder="Pilih Opsi">
                                    <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                    <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                                    <option value="Basis Data">Basis Data</option>
                                    <option value="User Interface & User Experience">User Interface & User Experience</option>
                                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                                    <option value="Pengantar Teknologi Informasi">Pengantar Teknologi Informasi</option>
                                    <option value="Sistem Operasi">Sistem Operasi</option>
                                </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nilai Praktikum</label>
                                        <input class="input--style-4" name="nilai__tugas" required>
                                    </div>
                                </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                                <button class="btn btn--radius-2 btn--blue" type="submit">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="js/global.js"></script>

</body>
</html>