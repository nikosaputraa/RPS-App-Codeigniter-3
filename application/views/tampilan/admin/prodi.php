<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
        <br />
        <h3 class="text-center" style="font-size: 20px; margin:0px;"><b>List Prodi</b></h3>
        <p class="text-center" style="font-size: 13px;">Berikut adalah daftar data Prodi Universitas Amikom Yogyakarta</p>

        <div class="mb-2">
            <button class="btn btn-warning" data-toggle="modal" data-target="#modal" onclick="add()" style="float: left; font-size: 13px;"><i class="fa-solid fa-plus" style="margin-right: 10px;"></i>Tambah
                Prodi</button>
        </div>

        <!-- MEMBUAT FORM -->
        <div style="margin-bottom: 30px;">
            <table class="table table-bordered table-striped" style="font-size: 12px;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Nama Fakultas</th>
                        <th>Nama Kaprodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $data): ?>
                    <tr>
                        <td class="text-center" scope="row"><?= $i ?></td>
                        <td class="text-start"><?php echo $data->nama; ?></td>
                        <td class="text-start"><?php echo $data->fakultas; ?></td>
                        <td class="text-start"><?php echo $data->kaprodi; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('admin/delete_prodi/'. $data->id ) ?>"
                                class="btn btn-danger mt-1" style="font-size: 10px;"><i class="fa-solid fa-trash"></i> Delete
                            </a>
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
                <form method="POST" action="<?php echo site_url('admin/add_prodi');?>">
                    <?php foreach ($fakultas as $fk) : ?>
                        <input type="hidden" name="fakultas_id" value="<?= $fk->id ?>">
                    <?php endforeach ?>
                    <div class="form-group">
                        <label>Nama Program Studi</label>
                        <input type="text" class="form-control" name="nama_prodi"
                            placeholder="Masukkan nama prodi" style="font-size: 14px;" required>
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <select class="form-control"  name="nama_fakultas" style="font-size: 14px;" required>
                                <option selected>-- Pilih fakultas --</option>
                                <?php foreach ($fakultas as $fk) : ?>
                                    <option value="<?= $fk->nama ?>"><?= $fk->nama ?></option>
                                <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Kaprodi</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama kaprodi"
                            name="nama_kaprodi" style="font-size: 14px;" required>
                    </div>
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>