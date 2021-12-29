<?php

$_fruits =["apple", "orange", "manggo"];

echo 'Elemen buah Index ke 2'. $_fruits[2];
echo '<br/>Jumlah Buah :'.count($_fruits);

?>

<h3>DAFTAR BUAH</h3>
<ol>
    <?php
        $jumlah = count($_fruits);
        for($i = 0 ; $si < $_jumlah; $i++){
            echo '<li>'.$_fruits[$i].'</li>';
        }
    ?>
</ol>

<?php
    $umur = ['ahmad' => 20, 'ali' => 21, 'dewi' => 19];

    foreach($umur as $k => $v){
        echo '<br/>' .$k.' usianya : '.$v;
    }
?>
<hr/>

<?php
    $ar_jus = [
        ['buah' => 'jeruk', 'harga' => 7500],
        ['buah' => 'mangga', 'harga' => 8000],
        ['buah' => 'alpukat', 'harga' => 10000],
        ['buah' => 'durian', 'harga' => 14000],
    ];
?>

<ol>
    <?php
        foreach($ar_jus as $jus){
        echo '<li>Jus ' .$jus['buah']. ' harga: '.$jus['harga'] . '</li>';
        }
    ?>
</ol><br>

<table width="100%" border="1">
<thead>
    <tr bgcolor="cyan">
        <th>NO</th><th>Buah</th><th>Harga</th>
    </tr>
</thead>
<tbody>
<tr>
<?php
    $nomor = 1;
    $total = 0;
    foreach($ar_jus as $jus){
    $warna = ($nomor%2 == 0)?'pink':'yellow';
    echo '<tr bgcolor="'.$warna.'"><td>'.$nomor.'</td><td>'.$jus['buah'].'</td><td align = "right">'.
    number_format($jus['harga'],2,',','.').'</td></tr>';
    $nomor++;
    $total = $total + $jus['harga'];
    }
?>
<tr>
    <td colspan="3" align ="right"><?php echo number_format($total,2,',','.')?></td>
</tr>
</tbody>
</table>