<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
        <br />
        <h3 class="text-center" style="font-size: 20px;"><b>List RPS</b></h3>
        <p class="text-center" style="font-size: 13px;">Berikut adalah daftar data RPS (Rencana Pembelajaran Semester)
        </p>

        <div class="mb-2">
            <button class="btn btn-warning" data-toggle="modal" data-target="#modal" onclick="add()"
                style="float: left; font-size: 13px;">
                <i class="fa-solid fa-plus" style="margin-right: 10px;"></i>
                Create RPS</button>
        </div>
        <!-- MEMBUAT FORM -->
        <div style="margin-bottom: 30px;">
            <table class="table table-bordered table-striped" style="font-size: 12px;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Nomor RPS</th>
                        <th>Program Studi</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($rps as $data): ?>
                    <tr>
                        <td class="text-center" scope="row"><?= $i ?></td>
                        <td class="text-start"><?php echo $data->nama_matakuliah; ?> (<?php echo $data->kode_matkul; ?>)
                        </td>
                        <td class="text-start"><?php echo $data->nomor; ?></td>
                        <td class="text-start"><?php echo $data->prodi_matkul; ?></td>
                        <td class="text-center"><?php echo $data->sem_matkul; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('file_rps/detail_file/' . $data->id) ?>"
                                class="btn btn-dark" style="font-size: 12px;"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?php echo site_url('file_rps/edit_file/' . $data->id) ?>" class="btn btn-warning"
                                style="font-size: 12px;"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo site_url('file_rps/view_file/' . $data->id) ?>" class="btn btn-primary"
                                style="font-size: 12px;">
                                <i class="fa-solid fa-print"></i></a>
                            <a href="<?php echo site_url('file_rps/delete/' . $data->id) ?>" class="btn btn-danger"
                                style="font-size: 12px;"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal RPS -->
<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal-form" method="POST" action="<?php echo site_url('file_rps/add_rps');?>">
                    <input type="hidden" name="id" value="<?= $rps_id ?>">
                    <div id="page1" class="form-page">
                        <div class="form-group">
                            <label>Nomor RPS</label>
                            <input type="text" class="form-control" placeholder="ex : RPS-D3TI-XXX" name="no_rps"
                                style="font-size: 14px;" required>
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <select class="form-control" id="matkul" name="matkul" style="font-size: 14px;">
                                <option selected disabled>-- Pilih mata kuliah --</option>
                                <?php foreach ($matkul as $dt) : ?>
                                <option value="<?= $dt->id_matkul ?>"><?= $dt->nm_matkul ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dosen Penyusun</label>
                            <select class="form-control" id="dosen" name="dosen" style="font-size: 14px;">
                                <option selected disabled>-- Pilih dosen --</option>
                                <?php foreach ($dosen as $dt) : ?>
                                <option value="<?= $dt->user_id ?>"><?= $dt->user_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Berlaku</label>
                            <input type="date" class="form-control" placeholder="Masukkan tanggal berlaku"
                                name="tgl_berlaku" style="font-size: 14px;" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Disusun</label>
                            <input type="date" class="form-control" placeholder="Masukkan tanggal disusun"
                                name="tgl_disusun" style="font-size: 14px;" required>
                        </div>
                        <div class="form-group">
                            <label for="detail_penilaian">Detail Penilaian</label>
                            <textarea class="p-2" rows="5" id="detail_penilaian" name="detail_penilaian"
                                placeholder="Masukkan detail penilaian"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <button class="btn btn-primary" onclick="nextPage()">Next</button>
                    </div>


                    <div id="page2" class="form-page" style="display: none;">
                        <div class="form-group">
                            <label>Gambaran Umum</label>
                            <textarea class="p-2" rows="5" id="gambaran_umum" name="gambaran_umum"
                                placeholder="Masukkan gambaran umum"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_penilaian">Capaian Pembelajaran</label>
                            <textarea class="p-2" rows="5" id="capaian" name="capaian"
                                placeholder="Masukkan capaian pembelajaran"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_penilaian">Prasyarat</label>
                            <textarea class="p-2" rows="5" id="prasyarat" name="prasyarat"
                                placeholder="Masukkan detail prasyarat"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <button class="btn btn-danger" onclick="previousPage()">Previous</button>
                        <button class="btn btn-primary" onclick="nextPage1()">Next</button>
                    </div>


                    <div id="page3" class="form-page" style="display: none;">
                        <div class="form-group">
                            <label for="pertemuan">Pertemuan</label>
                            <select class="form-control" id="pertemuan" name="pertemuan" style="font-size: 14px;"
                                required>
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
                            <label for="metode">Metode Pembelajaran</label>
                            <input type="text" class="form-control" id="metode" name="metode"
                                placeholder="Masukkan metode pembelajaran" style="font-size: 14px;" required>
                        </div>
                        <div class="form-group">
                            <label for="bahan_ajar">Bahan Ajar</label>
                            <input type="text" class="form-control" id="bahan_ajar" name="bahan_ajar"
                                placeholder="Masukkan bahan ajar" style="font-size: 14px;" required>
                        </div>
                        <div class="form-group">
                            <label>Indikator</label>
                            <textarea class="p-2" rows="5" id="indikator" name="indikator"
                                placeholder="Masukkan indikator pembelajaran"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kemampuan</label>
                            <textarea class="p-2" rows="5" id="kemampuan" name="kemampuan"
                                placeholder="Masukkan detail kemampuan"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Bahan Kajian</label>
                            <textarea class="p-2" rows="5" id="bahan_kajian" name="bahan_kajian"
                                placeholder="Masukkan detail bahan kajian"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>

                        <button class="btn btn-danger" onclick="previousPage1()">Previous</button>
                        <button class="btn btn-primary" onclick="nextPage2()">Next</button>
                    </div>


                    <div id="page4" class="form-page" style="display: none;">
                        <div class="form-group">
                            <label for="tugas">Tugas</label>
                            <input type="text" class="form-control" id="tugas" name="tugas"
                                placeholder="Masukkan detail tugas" style="font-size: 14px;">
                        </div>
                        <input type="hidden" name="rps_id" value="#">
                        <div class="form-group">
                            <label for="kemampuan">Kemampuan Mahasiswa</label>
                            <textarea class="p-2" rows="5" id="bobot" name="bobot"
                                placeholder="Masukkan detail kemampuan mahasiswa"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot</label>
                            <textarea class="p-2" rows="5" id="bobot" name="bobot" placeholder="Masukkan detail bobot"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kriteria_penilaian">Kriteria Penilaian</label>
                            <textarea class="p-2" rows="5" id="kriteria_penilaian" name="kriteria_penilaian"
                                placeholder="Masukkan kriteria penilaian"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="indikator_penilaian">Indikator Penilaian</label>
                            <textarea class="p-2" rows="5" id="indikator_penilaian" name="indikator_penilaian"
                                placeholder="Masukkan indikator penilaian"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>

                        <button class="btn btn-danger" onclick="previousPage2()">Previous</button>
                        <button class="btn btn-primary" onclick="nextPage3()">Next</button>
                    </div>


                    <div id="page5" class="form-page" style="display: none;">
                        <div class="form-group">
                            <label for="penilaian">Penilaian</label>
                            <input type="text" class="form-control" id="penilaian" name="penilaian"
                                placeholder="Masukkan penilaian" style="font-size: 14px;">
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukkan waktu"
                                style="font-size: 14px;">
                        </div>
                        <div class="form-group">
                            <label for="indikator">Indikator</label>
                            <textarea class="p-2" rows="5" id="indikator" name="indikator"
                                placeholder="Masukkan indikator"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kemampuan">Kemampuan</label>
                            <textarea class="p-2" rows="5" id="kemampuan_rencana" name="kemampuan_rencana"
                                placeholder="Masukkan kemampuan"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="aktivitas">Aktivitas</label>
                            <textarea class="p-2" rows="5" id="aktivitas" name="aktivitas"
                                placeholder="Masukkan aktivitas"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="topik">Topik</label>
                            <textarea class="p-2" rows="5" id="topik" name="topik" placeholder="Masukkan topik"
                                style="width: 100%; border-radius: 5px; font-size: 14px;" required></textarea>
                        </div>

                        <button class="btn btn-danger" onclick="previousPage3()">Previous</button>
                        <button type="submit" class="btn btn-success" onclick="submitForm()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function nextPage() {
    document.getElementById('page1').style.display = 'none';
    document.getElementById('page2').style.display = 'block';
}

function nextPage1() {
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page3').style.display = 'block';
}

function nextPage2() {
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page4').style.display = 'block';
}

function nextPage3() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page5').style.display = 'block';
}

function previousPage() {
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page1').style.display = 'block';
}

function previousPage1() {
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page2').style.display = 'block';
}

function previousPage2() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page3').style.display = 'block';
}

function previousPage3() {
    document.getElementById('page5').style.display = 'none';
    document.getElementById('page4').style.display = 'block';
}

function submitForm() {
    // Logika untuk mengirim form atau menyimpan data
    alert('Data berhasil disubmit!');
}
</script>