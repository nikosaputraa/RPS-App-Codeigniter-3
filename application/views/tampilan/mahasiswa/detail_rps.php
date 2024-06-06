<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 50px;">
        <br />
        <p class="text-center" style="font-size: 20px; margin:0px;"><b>Details File RPS</b></p>
        <p class="text-center" style="font-size: 13px;">Berikut adalah details dari data file RPS</p>
        <div class="row mb-2">
            <div class="container-fluid">
                <a><button onclick="goBack()" class="btn btn-warning btn-create" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-left"></i></button></a>
                <?php $id_edit = $this->uri->segment(3) ?>
            </div>
        </div>

        <!-- PAGE 1 -->
        <div class="card" id="page1">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true">Infromasi RPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="nextPage()" style="color: blue;">Unit Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="nextPage1()" style="color: blue;">Tugas/Aktivitas dan Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="nextPage2()" style="color: blue;">Rencana Pelaksanaan Pembelajaran</a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="row mb-4">
                    <div class="container-fluid">
                        <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                            <tbody>
                                <tr>
                                    <td class="col-3" style="width: 20%;">Nomor RPS</td>
                                    <td style="width: 80%;"><?= $detail->nomor ?></td>
                                </tr>

                                <tr>
                                    <td>Nama Mata Kuliah</td>
                                    <td><?= $detail->nama_matakuliah ?></td>
                                </tr>

                                <tr>
                                    <td>Program Studi</td>
                                    <td><?= $detail->prodi_matkul ?></td>
                                </tr>

                                <tr>
                                    <td>Fakultas</td>
                                    <td><?= $detail->nama_fakultas ?></td>
                                </tr>

                                <tr>
                                    <td>Semester</td>
                                    <td><?= $detail->sem_matkul ?></td>
                                </tr>

                                <tr>
                                    <td>Bobot SKS</td>
                                    <td><?= $detail->bobot_sks ?></td>
                                </tr>

                                <tr>
                                    <td>Tanggal Berlaku</td>
                                    <td><?= $detail->tgl_berlaku ?></td>
                                </tr>

                                <tr>
                                    <td>Tanggal Disusun</td>
                                    <td><?= $detail->tgl_disusun ?></td>
                                </tr>

                                <tr>
                                    <td>Dosen Penyusun</td>
                                    <td><?= $detail->dosen_penyusun ?></td>
                                </tr>

                                <tr>
                                    <td>Revisi</td>
                                    <td><?= $detail->revisi ?></td>
                                </tr>
                                
                                <tr>
                                    <td>Penilaian</td>
                                    <td><?= $detail->detail_penilaian ?></td>
                                </tr>

                                <tr>
                                    <td>Gambaran Umum</td>
                                    <td><?= $detail->gambaran_umum ?></td>
                                </tr>

                                <tr>
                                    <td>Capaian Pembelajaran</td>
                                    <td><?= $detail->capaian ?></td>
                                </tr>

                                <tr>
                                    <td>Prasyarat dan Pengetahuan Awal</td>
                                    <td><?= $detail->prasyarat ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE 2 -->
        <div class="card" id="page2" style="display: none;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link" onclick="previousPage()" style="color: blue;">Infromasi RPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true">Unit Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="tugasPage()" style="color: blue;">Tugas/Aktivitas dan Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="rppPage()" style="color: blue;">Rencana Pelaksanaan Pembelajaran</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="row mb-4">
                    <div class="container-fluid">
                        <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                            <tbody>
                                <?php foreach($unit_pembelajaran as $data): ?>
                                <tr>
                                    <td class="col-3" style="width: 20%;">Pertemuan</td>
                                    <td style="width: 80%;"><?php echo $data->pertemuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Metode</td>
                                    <td><?php echo $data->metode; ?></td>
                                </tr>

                                <tr>
                                    <td>Bahan Ajar</td>
                                    <td><?php echo $data->bahan_ajar; ?></td>
                                </tr>

                                <tr>
                                    <td>Indikator</td>
                                    <td><?php echo $data->indikator; ?></td>
                                </tr>

                                <tr>
                                    <td>Kemampuan</td>
                                    <td><?php echo $data->kemampuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Bahan Kajian</td>
                                    <td><?php echo $data->bahan_kajian; ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE 3 -->
        <div class="card" id="page3" style="display: none;">
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
                        <a class="nav-link" onclick="rppPage()" style="color: blue;">Rencana Pelaksanaan Pembelajaran</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="row mb-4">
                    <div class="container-fluid">
                        <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                            <tbody>
                                <?php foreach($unit_tugas as $data): ?>
                                <tr>
                                    <td class="col-3" style="width: 20%;">Tugas</td>
                                    <td style="width: 80%;"><?php echo $data->tugas; ?></td>
                                </tr>

                                <tr>
                                    <td>Kemampuan</td>
                                    <td><?php echo $data->kemampuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Pertemuan</td>
                                    <td><?php echo $data->pertemuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Bobot Tugas</td>
                                    <td><?php echo $data->bobot; ?></td>
                                </tr>

                                <tr>
                                    <td>Kriteria Penilaian</td>
                                    <td><?php echo $data->kriteria_penilaian; ?></td>
                                </tr>

                                <tr>
                                    <td>Indikator Penilaian</td>
                                    <td><?php echo $data->indikator_penilaian; ?></td>
                                </tr>

                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" id="page4" style="display: none;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" style="font-size: 14px;">
                    <li class="nav-item">
                        <a class="nav-link" onclick="previousPage()" style="color: blue;">Infromasi RPS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="previousPage1()" style="color: blue;">Unit Pembelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="previousPage2()" style="color: blue;">Tugas/Aktivitas dan Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true">Rencana Pelaksanaan Pembelajaran</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="row mb-4">
                    <div class="container-fluid">
                        <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">
                            <tbody>
                                <?php foreach($unit_details as $data): ?>
                                <tr>
                                    <td class="col-3" style="width: 20%;">Pertemuan</td>
                                    <td style="width: 80%;"><?php echo $data->pertemuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Kemampuan Yang Diharapkan</td>
                                    <td><?php echo $data->kemampuan; ?></td>
                                </tr>

                                <tr>
                                    <td>Indikator</td>
                                    <td><?php echo $data->indikator; ?></td>
                                </tr>

                                <tr>
                                    <td>Topik</td>
                                    <td><?php echo $data->topik; ?></td>
                                </tr>

                                <tr>
                                    <td>Aktivitas</td>
                                    <td><?php echo $data->aktivitas; ?></td>
                                </tr>

                                <tr>
                                    <td>Waktu</td>
                                    <td><?php echo $data->waktu; ?></td>
                                </tr>

                                <tr>
                                    <td>Penilaian</td>
                                    <td><?php echo $data->penilaian; ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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