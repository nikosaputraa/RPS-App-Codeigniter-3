<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
        <br />
        <h3 class="text-center" style="font-size: 20px;"><b>Data Mahasiswa</b></h3>
        <p class="text-center mb-4" style="font-size: 13px;">Berikut adalah daftar data Mahasiswa</p>

        <!-- MEMBUAT FORM -->
        <div style="margin-bottom: 30px;">
            <table class="table table-bordered table-striped" style="font-size: 12px;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $admin): ?>
                    <tr>
                        <td class="text-center" scope="row"><?= $i ?></td>
                        <td class="text-start"><?php echo $admin->user_name; ?></td>
                        <td class="text-start"><?php echo $admin->user_email; ?></td>
                        <td class="text-start">
                            <?php
                            if ($admin->user_status == '1') {
                                echo 'Administrator';
                            } elseif ($admin->user_status == '2') {
                                echo 'Dosen';
                            } elseif ($admin->user_status == '3') {
                                echo 'Mahasiswa';
                            } else {
                                echo 'Role Lainnya';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>