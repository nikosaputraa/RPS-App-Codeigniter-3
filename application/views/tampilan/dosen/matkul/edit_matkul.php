<div class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column col-sm-11 col-11 rounded"
          style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
          <br />
          <p class="text-center" style="font-size: 20px; margin:0px;"><b>Edit Details</b></p>
          <p class="text-center" style="font-size: 13px;">Berikut adalah details dari data mata kuliah</p>

          <div class="row mb-4">
          <div class="container-fluid">
            <a><button onclick="goBack()" class="btn btn-warning btn-create" style="font-size: 13px;">
            <i class="fa-solid fa-arrow-left"></i></button></a>

            <form action="<?php echo site_url('dosen/update_matkul');?>" method="POST">
            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
            <thead>
              <tr>
                <th colspan="3">Details Mata Kuliah</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($matkul as $data): ?>  
              <tr>
                <input type="hidden" class="form-control p-2" name="id_matkul" id="kode" value="<?php echo $data->id_matkul; ?>" style="font-size: 13px;">
                
                <td class="col-3" style="width: 20%;">Program Studi</td>
                <td style="width: 80%;">
                  <select class="form-control p-1" id="prodi_matkul" name="prodi_matkul" style="font-size: 13px;">
                    <option>D3 Teknik Informatika</option>
                    <option>D3 Manajemen Informatika</option>
                    <option>S1 Informatika</option>
                    <option>S1 Teknologi Informasi</option>
                    <option>S1-Ilmu Komiunikasi</option>
                    <option selected hidden value="<?php echo $data->prodi_matkul; ?>"><?php echo $data->prodi_matkul; ?></option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Kode</td>
                <td>
                  <input type="text" class="form-control p-2" name="kode_matkul" id="kode" value="<?php echo $data->kode_matkul; ?>" style="font-size: 13px;">
                </td>
              </tr>

              <tr>
                <td>Dosen Pengampu</td>
                <td>
                <input type="text" class="form-control p-2" name="dos_pengampu" id="dos_pengampu" value="<?php echo $data->dos_pengampu; ?>" style="font-size: 13px;">
                </td>
              </tr>

              <tr>
                <td>Nama Mata Kuliah</td>
                <td>
                <input type="text" class="form-control p-2" name="nm_matkul" id="nm_matkul" value="<?php echo $data->nm_matkul; ?>" style="font-size: 13px;">
                </td>
              </tr>

              <tr>
                <td>Semester</td>
                <td>
                <input type="number" class="form-control p-2" name="sem_matkul" id="sem_matkul" value="<?php echo $data->sem_matkul; ?>" style="font-size: 13px;">
                </td>
              </tr>

              <tr>
                <td>Jenis Mata Kuliah</td>
                <td>
                <select class="form-control p-1" id="tipe_matkul" name="tipe_matkul" style="font-size: 14px;" required>
                  <option>Teori</option>
                  <option>Praktikum</option>
                  <option>Teori & Praktikum</option>
                  <option selected hidden value="<?php echo $data->tipe_matkul; ?>"><?php echo $data->tipe_matkul; ?></option>
                </select>
                </td>
              </tr>

              <tr>
                <td>Bobot SKS</td>
                <td>
                <input type="number" class="form-control p-2" name="bobot_sks" id="bobot_sks" value="<?php echo $data->bobot_sks; ?>" style="font-size: 13px;">
                </td>
              </tr>

              <tr>
                <td>Deskripsi Mata Kuliah</td>
                <td>
                <textarea class="p-2" rows="5" id="des_matkul" name="des_matkul" style="width: 100%; border-radius: 5px;
                font-size: 13px; border: 1px solid lightgrey;"><?php echo $data->des_matkul; ?></textarea>
                </td>
              </tr>
            <?php endforeach ?>
            </tbody>
            </table>
            <a>
              <button class="btn btn-primary" name="edit_matkul" type="submit" style="font-size: 13px;">Update Data</button>
            </a>
            </form> 
          </div>
        </div>
        </div>
      </div>