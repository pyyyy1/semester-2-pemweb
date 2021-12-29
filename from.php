<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
   <style>
        body{
        background: url('img/bg4.jpg');
        background-attachment: fixed;
    }
    
    #btn{
        text-decoration: none;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 15px;
        border: 2px solid #cecece;
        border-radius:4px;
        padding: 5px 15px;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
        color: white;
        background-color: #ff6347;
    }
    #btn:hover{
        border: 3px solid teal;
        box-shadow: 2px 3px 4px teal;
    }
    
        </style>
</head>
<body background="img/bg4.jpg">
    <table border="15" align="left" cellpadding="20" width="10%" cellspacing="5">
        <form action="#" method="POST">
        <thead>
            <tr bgcolor="darkblue" align="center" length="50" font color="white">
                <th colspan="5" color="white"><font color="white">Cek Gaji </th></font> 
            </tr>

        </thead>

    
        <tbody bgcolor="lightblue">
                <tr> 
                <td width="30%"><label for="">Nama Pegawai :</label></td>
                <td>
                    <input type="text" name="pegawai" placeholder="Nama Pegawai">
                </td>
                    </tr>
                    <tr> 
                            <td width="70%" height="40%"><label for="">Agama</label></td>
                            <td>
                                <input type="radio" value="islam" name="agama"> Islam
                                <input type="radio" value="kristen" name="agama"> Kristen <br>
                                <input type="radio" value="hindu" name="agama"> Hindu
                                <input type="radio" value="buddha" name="agama"> Buddha <br>                             
                             <input type="radio" value="konghuchu" name="agama"> Katolik
                             <input type="radio" value="konghuchu" name="agama"> Konghucu
                            </td>
                                </tr>
                                        <tr>
                                                <td valign="top"><label for="">Jabatan</label></td>
                                        <td>
                                            <select name="jabatan" id="jabatan">
                                                    <option value="">*** Jabatan ***</option>
                                                <option value="manager" name="manager">Manager</option>
                                                <option value="supervisor" name="supervisor">Supervisor</option>
                                                <option value="staff" name="staff">Staff</option>
                                            </select></tr>
                                        </td>
                                </tr>
                                <tr>
                                                <td valign="top"><label for="">Status</label></td>
                                                <td><select name="status" id="status">
                                                    <option value="">*** Status ***</option>
                                                <option value="menikah" name="menikah">Menikah</option>
                                                <option value="blmnikah" name="belum">Belum Menikah</option>
                    
                </td>
                                </tr>
                                <tr> 
                <td width="30%"><label for="">Jumlah Anak :</label></td>
                <td>
                    <input type="text" name="anak" placeholder="Jumlah Anak">
                </td>
                    </tr>
                                
                                <tfoot bgcolor="lightgreen">
        <tr>
        <th colspan="5"><input type="submit" value="Simpan" name="simpan" id="btn">
        <input type="reset" value="Batal"  id="btn"></th>
        </tr></tfoot>
</td>
</tr>
</form>

<?php
@$tombol = $_POST['simpan'];
@$pegawai = $_POST['pegawai'];
@$agama = $_POST['agama'];
@$jabatan = $_POST['jabatan'];
@$status = $_POST['status'];
@$anak = $_POST['anak'];
if($jabatan == "manager"){
    $gaji= 10000000;
    $tunjangan= 10000000 * 20/100;
    
}
else if($jabatan == "supervisor"){
    $gaji= 7000000;
    $tunjangan= 7000000 * 20/100;
}
else if($jabatan == "staff"){
    $gaji= 3000000;
    $tunjangan= 3000000 * 20/100; 
}
//ternary pengganti if else (untuk true dan false) 

$tunjangankel = ($status == 'menikah') ? 10/100 * $gaji : 0;
if($anak <= 3 ){
    $tunjangananak = $anak * 5/100 * $gaji ;   
}
@$zakat = ($agama == 'islam' && $gaji >= 6000000) ? 2.5/100 * ($gaji+$tunjangan+$tunjangankel+$tunjangananak)  : 0;
@$total= $tunjangan + $gaji + $tunjangananak + $tunjangankel - $zakat;
@$tunjangannya = "Rp. " . number_format($tunjangan) . ",-";
@$tunjangankelnya = "Rp. " . number_format($tunjangankel) . ",-";
@$tunjangananaknya = "Rp. " . number_format($tunjangananak) . ",-";
@$gajinya = "Rp. " . number_format($gaji) . ",-";
$totalnya = "Rp. " . number_format($total) . ",-";
$zakatnya = "Rp. " . number_format($zakat) . ",-";

//data akan ditampilkan jika sudah di klik tombol simpan dan } harus di paling bawah
if(!empty($tombol)){
?>

<table border="15" align="center" cellpadding="15" width="55%" cellspacing="5">
        <form action="" method="post">
        <thead>
            <tr bgcolor="darkblue" align="center" length="50" font color="white">
                <th colspan="5" color="white"><font color="white">Gaji Anda </th></font> 
            </tr>

        </thead>

    
        <tbody bgcolor="lightblue">
                <tr> 
                <td width="50%"><label for="">Nama Pegawai </label></td>
                <td> <?= $pegawai ?> </td>
                    </tr>
                    <tr> 
                            <td width="70%" height="40%"><label for="">Agama</label></td>
                            <td> <?= $agama ?> </td>
                                </tr>
                                        <tr>
                                                <td valign="top"><label for="">Jabatan</label></td>
    
                                        <td> <?= $jabatan ?> </td>        
                                    </tr>
                                    <tr>
                                                <td valign="top"><label for="">Status</label></td>
    
                                        <td> <?= $status ?> </td>        
                                    </tr>
                                    <tr>
                                                <td valign="top"><label for="">Jumlah Anak</label></td>
    
                                        <td> <?= $anak ?> </td>        
                                    </tr>
                                    <tr>
                                                <td valign="top"><label for="">Gaji</label></td>
    
                                        <td> <?= $gajinya ?> </td>        
                                     </tr>
                                    <tr>
                                                <td valign="top"><label for="">Tunjangan</label></td>
    
                                        <td> <?= $tunjangannya ?> </td>        
                                    </tr>
                                    
                                    <tr>
                                                <td valign="top"><label for="">Tunjangan Keluarga</label></td>
    
                                        <td> <?= $tunjangankelnya ?> </td>        
                                    </tr>
                                    <tr>
                                                <td valign="top"><label for="">Tunjangan Anak</label></td>
    
                                        <td> <?= $tunjangananaknya ?> </td>        
                                    </tr>
                                    <tr>
                                                <td valign="top"><label for="">Zakat</label></td>
    
                                        <td> <?= $zakatnya ?> </td>        
                                    </tr>
                                    <tr>
                                        <tfoot  bgcolor="lightgreen">
                                                <td valign="top"><label for="">Take Home Pay</label></td>
    
                                        <td> <?= $totalnya ?> </td>        
                                    </tr>
                                        </td>
                                </tr>
                                </tfoot>
<?php } ?>