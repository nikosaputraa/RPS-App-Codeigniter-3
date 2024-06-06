<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
        <br />
        <h3 class="text-center" style="font-size: 20px; margin:0px;"><b>List Mata Kuliah</b></h3>
        <p class="text-center" style="font-size: 13px;">Berikut adalah daftar data Mata Kuliah</p>

        <!-- MEMBUAT FORM -->
        <div class="mt-2" style="margin-bottom: 30px;">
            <table class="table table-bordered table-striped" style="font-size: 12px;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Program Studi</th>
                        <th style="width: 15%;">Dosen Pengampu</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($matkul as $data): ?>
                    <tr>
                        <td class="text-center" scope="row"><?= $i ?></td>
                        <td class="text-start"><?php echo $data->nm_matkul; ?> (<?php echo $data->kode_matkul; ?>)</td>
                        <td class="text-start"><?php echo $data->prodi_matkul; ?></td>
                        <td class="text-start"><?php echo $data->dos_pengampu; ?></td>
                        <td class="text-start"><?php echo $data->des_matkul; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('mahasiswa/detail_matkul/'. $data->id_matkul) ?>"
                                class="btn btn-primary" style="font-size: 10px;"><i class="fa-solid fa-circle-info"></i>
                                Details</a>
                            <a href="<?php echo site_url('mahasiswa/view_materi/' . $data->id_matkul . '/' . $data->kode_matkul) ?>"
                                class="btn btn-success mt-1" style="font-size: 10px;">
                                <i class="fa-solid fa-eye"></i> Lihat Materi</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Tambah Matkul -->

<div class="modal fade" id="modal">
    <div class="modal-dialog d-flex flex-column">
        <div class="d-flex flex-column modal-content" style="width: 600px">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('dosen/add_matkul');?>">
                    <input type="hidden" name="id_matkul" value="<? echo $id_matkul ?>" style="font-size: 13px;">
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_matkul" name="nama_matkul"
                            placeholder="Masukkan nama mata kuliah" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kode Mata Kuliah"
                            name="kode_matkul" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" id="prodi_matkul" name="prodi_matkul" style="font-size: 14px;" required>
                            <option selected>-- Pilih Prodi --</option>
                            <option>D3 Teknik Informatika</option>
                            <option>D3 Manajemen Informatika</option>
                            <option>S1 Informatika</option>
                            <option>S1 Teknologi Informasi</option>
                            <option>S1-Ilmu Komiunikasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen Pengampu</label>
                        <input type="text" class="form-control" id="dosen_pengampu" name="dosen_pengampu"
                            placeholder="Masukkan nama dosen pengampu" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Bobot SKS</label>
                        <input type="number" class="form-control" id="bobot_sks" name="bobot_sks"
                            placeholder="Masukkan bobot sks (dalam angka)" style="font-size: 14px;" required>
                    </div>

                    <div class="form-group">
                        <label>Teori / Praktikum</label>
                        <select class="form-control" id="tipe_matkul" name="tipe_matkul" style="font-size: 14px;" required>
                            <option selected>-- Pilih Tipe --</option>
                            <option>Teori</option>
                            <option>Praktikum</option>
                            <option>Teori & Praktikum</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Semester</label>
                        <input type="number" class="form-control" id="semester_matkul"
                            name="semester_matkul" placeholder="Masukkan semester (dalam angka)" style="font-size: 14px;" required>
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Mata Kuliah</label>
                        <textarea class="p-2" rows="5" id="deskripsi_matkul" name="deskripsi_matkul"
                        placeholder="Masukkan deskripsi mata kuliah"
                        style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>