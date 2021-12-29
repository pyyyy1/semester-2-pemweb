<?php

$nilai = $_POST['nilai'];

if($nilai > 89){ // Konsisi pertama 100-90
    echo "anda mendapatkan grade A";
} elseif ($nilai > 79){ // Konsisi kedua 89-70
    echo "anda mendapatkan grade B";
} elseif($nilai > 69){ // Konsisi ketiga 69-0
    echo "anda mendapatkan grade C";
} else{ // Konsisi keempat jika tidak ada nilai
    echo "nilai yang anda masukan salah";
}

?>