    <div class="col-md-12">
        <h3>
            Daftar Pasien
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Action</th>
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
                    <td><?=$list_pasien[$num]->kode?></td>
                    <td><?=$list_pasien[$num]->nama?></td>
                    <td><?=$list_pasien[$num]->gender?></td>
                    <td><?=$list_bmi[$num]->berat?></td>
                    <td><?=$list_bmi[$num]->tinggi?></td>
                    <td><?=$list_bmi[$num]->nilaiBMI()?></td>
                    <td><?=$list_bmi[$num]->statusBMI()?></td>
                </tr>
            <?php
            $num++;
            }
            ?>
            </tbody>
        </table>
    </div>

</div>
