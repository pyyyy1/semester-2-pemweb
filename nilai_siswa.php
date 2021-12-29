<?php
function Grade($nilai_akhir) {
  if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    return '<b class="text-success">Grade A</b> ';
  }
  elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
    return '<b class="text-success">Grade B</b>';
  }
  elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
    return '<b class="text-success">Grade C</b>';
  }
  elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
    return '<b class="text-success">Grade D</b>';
  }
  elseif ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
    return '<b class="text-success">Grade E</b>';
  }
  else {
    return '<b class="text-danger">Grade ?</b>';
  }
}
function Predikat($nilai_akhir) {
  switch (true) {
    case $nilai_akhir >= 85 && $nilai_akhir <= 100:
      return '<h5 class="text-info">Sangat Memuaskan</h5><br><br>';
      break;
    case $nilai_akhir >= 70 && $nilai_akhir <= 84:
      return '<h5 class="text-info">Memuaskan</h5><br><br>';
      break;
    case $nilai_akhir >= 56 && $nilai_akhir <= 69:
      return '<h5 class="text-info">Cukup</h5><br><br>';
      break;
    case $nilai_akhir >= 36 && $nilai_akhir <= 55:
      return '<h5 class="text-info">Kurang</h5><br><br>';
      break;
    case $nilai_akhir >= 0 && $nilai_akhir <= 35:
      return '<h5 class="text-info">Sangat Kurang</h5><br><br>';  
      break;
    default:
      return '<h5>Tidak Ada</h5><br><br>';
      break;
  }
}
function Kelulusan($nilai_akhir) {
  if ($nilai_akhir > 55) {
    return "Lulus";
  } 
  else {
    return "Tidak Lulus";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Nilai Siswa</title>

    <!-- Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
</head>
<body>
    <?php
    $process = $_GET['proses'];
    $name = $_GET['nama__lengkap']; 
    $mata_kuliah = $_GET['mata__kuliah'];
    $nilai_uts = $_GET['nilai__uts'];
    $nilai_uas = $_GET['nilai__uas'];
    $nilai_tugas = $_GET['nilai__tugas'];
    $total = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    $nilai_akhir = number_format($total, 2);
    ?>
    <div class="container bg-light mt-5 mb-5 p-5 shadow">
    <h2 class="animate__animated animate__pulse animate__infinite infinite animate__delay-4s 4s text-center mb-5">Nilai Siswa :</h2>
    <?php
      echo "<b>Proses :</b> $process <br><br>";
      echo "<b>Nama Siswa :</b> $name <br><br>";
      echo "<b>Mata Kuliah :</b> $mata_kuliah<br><br>";
      echo "<b>Nilai UTS :</b> $nilai_uts <br><br>";
      echo "<b>Nilai UAS :</b> $nilai_uas <br><br>";
      echo "<b>Nilai Tugas Praktikum :</b> $nilai_tugas <br><br>";
      echo "<b>Total :</b> $nilai_akhir <br><br>";
      echo Grade($nilai_akhir)."<br><br>";
      echo Predikat($nilai_akhir);
      echo Kelulusan($nilai_akhir);
    ?>
  </div>     
</body>
</html>