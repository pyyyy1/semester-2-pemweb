<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || Daftar Nama-Nama Buah</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <!-- CSS Style -->
    <style>
        body {
            background-color: ##66CDAA;
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

    <?php
    $proses = $_GET['proses__'];
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ]; 
    // cetak buah ke index ke 2    $nilai_uts = $_GET['nilai__uts'];
    echo $ar_buah[2]; // cetak jumlah buah
    echo '<br/>Jumlah Buah ' . count($ar_buah); // cetak seluruh buah 
    echo '<ol>';
    foreach($ar_buah as $buah){
        echo '<li>'. $buah .'</li>';
        }
        echo '</ol>'; //tambahkan buah
        $ar_buah[]="Durian"; // hapus buah index ke 1
        unset($ar_buah[1]); // ubah buah index ke 2 menjadi manggis
        $ar_buah[2]="Manggis"; // cetak seluruh buah dengan index nya
        echo '<ul>';
        foreach($ar_buah as $k => $v){
            echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
        }
        echo '</ul>';
    ?>

    <?php
        $proses = $_GET['proses__'];
        $nama_buah = $_GET['nama__buah']; 
        $jumlah_buah = $_GET['jumlah__buah'];
        $harga_buah = $_GET['harga__buah'];

        $ns1 = ['id'=>1,'buah'=>'Mangga','uts'=>80,'uas'=>84,'tugas'=>78];
        $ns2 = ['id'=>2,'buah'=>'Manggis','uts'=>70,'uas'=>50,'tugas'=>68];
        $ns3 = ['id'=>3,'buah'=>'Pepaya','uts'=>60,'uas'=>86,'tugas'=>70];
        $ns4 = ['id'=>4,'buah'=>'Pisang','uts'=>90,'uas'=>91,'tugas'=>82];
        $ns5 = ['id'=>5,'buah'=> 'Jambu','uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
        
        $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
        ?>


    <div class="container shadow bg-light p-5 mt-5">
        <h3 class="text-center mb-5"><b>Daftar Nilai Siswa</b></h3>
        <form action="nilai_siswa.php" method="GET">
        <table>
            <thead class="text-center">
            <tr>
                <th>No</th><th>NAMA BUAH</th><th>JUMLAH BUAH</th>
            </tr>
            </thead>
            
            <tbody class="text-center">
            <?php
            $nomor = 1;
            foreach($ar_nilai as $ns) {
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
            </tbody>
        </table>
        </form>        
    </div>   
      
    <div class="container bg-light mt-5 mb-5 p-5 shadow">
        <h1 class="animate__animated animate__pulse animate__infinite infinite animate__delay-4s 4s">Hasilnya Adalah :</h1>
        <br>
        <?php
        echo "<b>Proses </b>: $proses <br><br> <b>Nama </b>: $nama_siswa <br><br> <b>NIM </b>: $nim <br>
                <br><b>Mata Kuliah </b>: $mata_kuliah <br><br> <b>Nilai UTS </b>: $nilai_uts <br>
                <br><b>Nilai UAS </b>: $nilai_uas <br><br> <b>Nilai Tugas </b>: $nilai_tugas <br>";
        ?>
  </div>
    </div>
</body>
</html>