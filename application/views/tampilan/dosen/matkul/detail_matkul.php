<div class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column col-sm-11 col-11 rounded"
          style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
          <br />
          <p class="text-center" style="font-size: 20px; margin:0px;"><b>Details Mata Kuliah</b></p>
          <p class="text-center" style="font-size: 13px;">Berikut adalah details dari data mata kuliah</p>

          <div class="row mb-4">
          <div class="container-fluid">
            <a><button onclick="goBack()" class="btn btn-warning btn-create" style="font-size: 13px;">
            <i class="fa-solid fa-arrow-left"></i></button></a>

            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
            <thead>
              <tr>
                <th colspan="3">Details Mata Kuliah</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($matkul as $data): ?>  
              <tr>
                <td class="col-3" style="width: 20%;">Program Studi</td>
                <td style="width: 80%;"><?php echo $data->prodi_matkul; ?></td>
              </tr>

              <tr>
                <td>Kode</td>
                <td><?php echo $data->kode_matkul; ?></td>
              </tr>

              <tr>
                <td>Dosen Pengampu</td>
                <td><?php echo $data->dos_pengampu; ?></td>
              </tr>

              <tr>
                <td>Nama Mata Kuliah</td>
                <td><?php echo $data->nm_matkul; ?></td>
              </tr>

              <tr>
                <td>Semester</td>
                <td><?php echo $data->sem_matkul; ?></td>
              </tr>

              <tr>
                <td>Jenis Mata Kuliah</td>
                <td><?php echo $data->tipe_matkul; ?></td>
              </tr>

              <tr>
                <td>Bobot SKS</td>
                <td><?php echo $data->bobot_sks; ?></td>
              </tr>

              <tr>
                <td>Deskripsi Mata Kuliah</td>
                <td><?php echo $data->des_matkul; ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>