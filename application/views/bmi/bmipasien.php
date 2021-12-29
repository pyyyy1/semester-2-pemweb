<div>
        <h3>
            Daftar BMI Pasien
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Berat</th>
                    <th>Tinggi</th>
                    <th>BMI</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
            $num = 0;
            foreach($list_bmipasien as $bmi) {
            ?>
                <tr>
                    <td><?=$num+1?></td>
                    <td><?=$bmi->tanggal?></td>
                    <td><?=$list_pasien[$num]->kode?></td> <!---diharuskan menggunakan indexing karena $list_pasien ini array dan kita ingin mencetak isinya-->
                    <td><?=$list_pasien[$num]->nama?></td>
                    <td><?=$list_pasien[$num]->gender?></td>
                    <td><?=$list_bmi[$num]->berat?></td>
                    <td><?=$list_bmi[$num]->tinggi?></td>
                    <td><?=$list_bmi[$num]->hitungBMI()?></td>
                    <td><?=$list_bmi[$num]->statusBMI()?></td>
                </tr>
            <?php
            $num++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div> <!-- /#page-content-wrapper -->