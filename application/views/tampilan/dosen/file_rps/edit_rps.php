<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 20px;">
        <br />
        <p class="text-center" style="font-size: 20px; margin:0px;"><b>Edit File RPS</b></p>
        <p class="text-center" style="font-size: 13px;">Berikut adalah details dari data file RPS</p>
        <div class="row">
            <div class="container-fluid">
                <a href="<?php echo site_url('file_rps'); ?>">
                    <button class="btn btn-warning btn-create" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-left"></i></button>
                </a>
            </div>
            <div class="container-fluid mt-2">
                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success') ?>
                    <button onclick="this.parentElement.style.display=`none`" class="close" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <form action="<?php echo site_url('file_rps/update_rps/'.$detail->id);?>" method="POST">
            <!-- PAGE 1 -->
            <div class="card mb-4" id="page1">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true">Infromasi RPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="nextPage()" style="color: blue;">Unit Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="nextPage1()" style="color: blue;">Tugas/Aktivitas dan
                                Penilaian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="nextPage2()" style="color: blue;">Rencana Pelaksanaan
                                Pembelajaran</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row mb-4">
                        <div class="container-fluid">
                            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                                <tbody>
                                    <tr>
                                        <input type="hidden" name="matkul_id" value="<?= $detail->id_matkul ?>">

                                        <td class="col-3" style="width: 20%;">Nomor RPS</td>
                                        <td style="width: 80%;">
                                            <input type="text" class="form-control p-2" name="no_rps" id="no_rps"
                                                value="<?= $detail->nomor ?>" style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Berlaku</td>
                                        <td>
                                            <input type="date" class="form-control p-2" name="tgl_berlaku"
                                                id="tgl_berlaku" value="<?= $detail->tgl_berlaku ?>"
                                                style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Disusun</td>
                                        <td>
                                            <input type="date" class="form-control p-2" name="tgl_disusun"
                                                id="tgl_disusun" value="<?= $detail->tgl_disusun ?>"
                                                style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dosen Penyusun</td>
                                        <td>
                                            <input type="hidden" name="dosen_penyusun_id"
                                                value="<?= $detail->dosen_penyusun_id ?>">
                                            <input type="text" class="form-control p-2" name="dosen_penyusun"
                                                id="dosen_penyusun" value="<?= $detail->dosen_penyusun ?>"
                                                style="font-size: 13px;" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Revisi</td>
                                        <td>
                                            <input type="text" class="form-control p-2" name="revisi" id="revisi"
                                                value="<?= $detail->revisi ?>" style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Penilaian</td>
                                        <td>
                                            <textarea class="p-2" rows="5" id="detail_penilaian" name="detail_penilaian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"
                                                required><?= $detail->detail_penilaian ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Gambaran Umum</td>
                                        <td>
                                            <textarea class="p-2" rows="5" id="gambaran_umum" name="gambaran_umum"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"
                                                required><?= $detail->gambaran_umum ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Capaian Pembelajaran</td>
                                        <td>
                                            <textarea class="p-2" rows="5" id="capaian" name="capaian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"
                                                required><?= $detail->capaian ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Prasyarat dan Pengetahuan Awal</td>
                                        <td>
                                            <textarea class="p-2" rows="5" id="prasyarat" name="prasyarat"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"
                                                required><?= $detail->prasyarat ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary" style="font-size: 13px;">
                                                <i class="fa-solid fa-pen-to-square"></i> Update Data
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="<?php echo site_url('file_rps/update_rps_unit_pembelajaran/'.$detail->id);?>" method="POST">
            <!-- PAGE 2 -->
            <div class="card mb-4" id="page2" style="display: none;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage()" style="color: blue;">Infromasi RPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true">Unit Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="tugasPage()" style="color: blue;">Tugas/Aktivitas dan
                                Penilaian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="rppPage()" style="color: blue;">Rencana Pelaksanaan
                                Pembelajaran</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row mb-4">
                        <div class="container-fluid">
                            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                                <tbody>
                                    <?php foreach($unit_pembelajaran as $data): ?>
                                    <tr>
                                        <td class="col-3" style="width: 20%;">Pertemuan</td>
                                        <td style="width: 80%;">
                                            <input type="hidden" name="rps_id" value="<?php echo $data->rps_id; ?>">
                                            <input type="number" class="form-control p-2" name="pertemuan"
                                                id="pertemuan" value="<?php echo $data->pertemuan; ?>"
                                                style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Metode</td>
                                        <td>
                                            <input type="text" class="form-control p-2" name="metode" id="metode"
                                                value="<?php echo $data->metode; ?>" style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Bahan Ajar</td>
                                        <td>
                                            <input type="text" class="form-control p-2" name="bahan_ajar"
                                                id="bahan_ajar" value="<?php echo $data->bahan_ajar; ?>"
                                                style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Indikator</td>
                                        <td>
                                            <textarea class="p-2" rows="5" id="indikator" name="indikator"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->indikator; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kemampuan</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="kemampuan" id="kemampuan"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->kemampuan; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Bahan Kajian</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="bahan_kajian" id="bahan_kajian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->bahan_kajian; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary" style="font-size: 13px;">
                                                <i class="fa-solid fa-pen-to-square"></i> Update Data
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="<?php echo site_url('file_rps/update_rps_unit_tugas/'.$detail->id);?>" method="POST">
            <!-- PAGE 3 -->
            <div class="card mb-4" id="page3" style="display: none;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage()" style="color: blue;">Infromasi RPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage1()" style="color: blue;">Unit Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true">Tugas/Aktivitas dan Penilaian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="rppPage()" style="color: blue;">Rencana Pelaksanaan
                                Pembelajaran</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row mb-4">
                        <div class="container-fluid">
                            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                                <tbody>
                                    <?php foreach($unit_tugas as $data): ?>
                                    <tr>
                                        <td class="col-3" style="width: 20%;">Tugas</td>
                                        <td style="width: 80%;">
                                            <input type="hidden" name="rps_id" value="<?php echo $data->rps_id; ?>">
                                            <input type="text" class="form-control p-2" name="tugas" id="tugas"
                                                value="<?php echo $data->tugas; ?>" style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kemampuan</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="kemampuan" id="kemampuan"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->kemampuan; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Pertemuan</td>
                                        <td>
                                            <input type="text" class="form-control p-2" name="pertemuan" id="pertemuan"
                                                value="<?php echo $data->pertemuan; ?>" style="font-size: 13px;"
                                                readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Bobot Tugas</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="bobot" id="bobot"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->bobot; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kriteria Penilaian</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="kriteria_penilaian" id="kriteria_penilaian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->kriteria_penilaian; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Indikator Penilaian</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="indikator_penilaian" id="indikator_penilaian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->indikator_penilaian; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary" style="font-size: 13px;">
                                                <i class="fa-solid fa-pen-to-square"></i> Update Data
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="<?php echo site_url('file_rps/update_unit_rencana_pelaksanaan/'.$detail->id);?>" method="POST">
            <div class="card mb-4" id="page4" style="display: none;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage()" style="color: blue;">Infromasi RPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage1()" style="color: blue;">Unit Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="previousPage2()" style="color: blue;">Tugas/Aktivitas dan
                                Penilaian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true">Rencana Pelaksanaan Pembelajaran</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="row mb-4">
                        <div class="container-fluid">
                            <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                                <tbody>
                                    <?php foreach($unit_details as $data): ?>
                                    <tr>
                                        <td class="col-3" style="width: 20%;">Pertemuan</td>
                                        <td style="width: 80%;">
                                            <input type="hidden" name="rps_id" value="<?php echo $data->rps_id; ?>">
                                            <input type="text" class="form-control p-2" name="pertemuan" id="pertemuan"
                                                value="<?php echo $data->pertemuan; ?>" style="font-size: 13px;"
                                                readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kemampuan Yang Diharapkan</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="kemampuan" id="kemampuan"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->kemampuan; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Indikator</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="indikator" id="indikator"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->indikator; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Topik</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="topik" id="topik"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->topik; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Aktivitas</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="aktivitas" id="aktivitas"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->aktivitas; ?></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Waktu</td>
                                        <td>
                                            <input type="text" class="form-control p-2" name="waktu" id="waktu"
                                                value="<?php echo $data->waktu; ?>" style="font-size: 13px;">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Penilaian</td>
                                        <td>
                                            <textarea class="p-2" rows="5" name="penilaian" id="penilaian"
                                                style="width: 100%; border-radius: 5px; font-size: 14px;"><?php echo $data->penilaian; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary" style="font-size: 13px;">
                                                <i class="fa-solid fa-pen-to-square"></i> Update Data
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
function nextPage() {
    document.getElementById('page1').style.display = 'none';
    document.getElementById('page2').style.display = 'block';
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page4').style.display = 'none';
}

function nextPage1() {
    document.getElementById('page1').style.display = 'none';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page3').style.display = 'block';
    document.getElementById('page4').style.display = 'none';
}

function nextPage2() {
    document.getElementById('page1').style.display = 'none';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page4').style.display = 'block';
}

function nextPage3() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page5').style.display = 'block';
}

function previousPage() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page1').style.display = 'block';
}

function tugasPage() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page3').style.display = 'block';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page1').style.display = 'none';
}

function rppPage() {
    document.getElementById('page4').style.display = 'block';
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page1').style.display = 'none';
}

function previousPage1() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page3').style.display = 'none';
    document.getElementById('page2').style.display = 'block';
    document.getElementById('page1').style.display = 'none';
}

function previousPage2() {
    document.getElementById('page4').style.display = 'none';
    document.getElementById('page3').style.display = 'block';
    document.getElementById('page2').style.display = 'none';
    document.getElementById('page1').style.display = 'none';
}


function submitForm() {
    // Logika untuk mengirim form atau menyimpan data
    alert('Data berhasil disubmit!');
}
</script>