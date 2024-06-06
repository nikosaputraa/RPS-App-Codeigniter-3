<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 40px;">
        <br />
        <p class="text-center" style="font-size: 20px; margin: 0px;"><b>List Materi</b></p>
        <p class="text-center" style="font-size: 13px;">Berikut adalah daftar materi mata kuliah tersebut</p>

        <div class="mb-2 row">
            <a style="margin-left: 8px; margin-right: 5px;"
                href="<?php echo site_url('dosen/daftar_matkul');?>"><button class="btn btn-primary"
                    style="font-size: 13px;">
                    <i class="fa-solid fa-arrow-left"></i></button>
            </a>
            <?php $id_matkul = $this->uri->segment(3) ?>
            <?php $kode_matkul = $this->uri->segment(4) ?>
            <div>
                <button class="btn btn-warning" data-toggle="modal" data-target="#modal" onclick="add()"
                    style="float: left; font-size: 13px;"><i class="fa-solid fa-plus"
                        style="margin-right: 10px;"></i>Tambah Materi</button>
            </div>
        </div>

        <!-- MEMBUAT FORM -->
        <div style="margin-bottom: 30px;">
            <table class="table table-bordered table-striped" style="font-size: 12px;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul Materi</th>
                        <th>Pertemuan</th>
                        <th>Capaian Pembelajaran</th>
                        <th>Deskripsi Materi</th>
                        <th>Tanggal Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($materi as $data): ?>
                    <tr>
                        <td class="text-center" scope="row"><?= $i ?></td>
                        <td class="text-start"><?php echo $data->judul_materi; ?></td>
                        <td class="text-center"><?php echo $data->pertemuan; ?></td>
                        <td class="text-center"><?php echo $data->cp_pembelajaran; ?></td>
                        <td class="text-start"><?php echo $data->des_materi; ?></td>
                        <td class="text-start"><?php echo $data->tgl_dibuat; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('dosen/edit_materi/' . $id_matkul . '/' . $data->id_materi . '/' . $data->kode_matkul) ?>"
                                class="btn btn-warning" style="font-size: 10px;">
                                <i class="fa-solid fa-pen-to-square"></i> Edit Materi</a>
                            <a href="<?php echo site_url('dosen/delete_materi/' . $id_matkul . '/' . $data->id_materi . '/' . $data->kode_matkul) ?>"
                                class="btn btn-danger mt-1" style="font-size: 10px;">
                                <i class="fa-solid fa-trash"></i> Delete</a>
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
                <form method="POST" action="<?php echo site_url('dosen/add_materi');?>">
                    <input type="hidden" name="id_matkul" value="<?php echo $id_matkul ?>">
                    <input type="hidden" name="kode_matkul" value="<?php echo $kode_matkul ?>">
                    <div class="form-group">
                        <label>Pertemuan</label>
                        <select class="form-control" id="pertemuan" name="pertemuan" style="font-size: 14px;" required>
                            <option selected>-- Pilih Pertemuan --</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Materi</label>
                        <input type="text" class="form-control" placeholder="Masukkan judul materi"
                            name="judul_materi" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Capaian Pembelajaran</label>
                        <input type="text" class="form-control" placeholder="Masukkan capaian pembelajaran"
                            name="cp_pembelajaran" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Materi</label>
                        <textarea class="p-2" rows="5" id="des_materi" name="des_materi"
                            placeholder="Masukkan deskripsi materi"
                            style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Dibuat</label>
                        <input type="date" class="form-control" placeholder="Masukkan capaian pembelajaran"
                            name="tgl_dibuat" style="font-size: 14px;" required>
                    </div>
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>