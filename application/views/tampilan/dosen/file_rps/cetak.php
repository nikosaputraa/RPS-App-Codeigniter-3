<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
    @page {
        margin: 0cm 0cm;
    }

    body {
        margin-top: 2cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
    }

    header {
        position: fixed;
        top: 2cm;
        left: 2cm;
        right: 2cm;
        height: 5.5cm;
        margin-bottom: 100px;

        /** Extra personal styles **/
        /* background-color: #03a9f4; */
        /* color: white; */
        text-align: center;
        /* line-height: 1.5cm; */
    }

    /** Define the footer rules **/
    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

        /** Extra personal styles **/
        background-color: #03a9f4;
        color: white;
        text-align: center;
        line-height: 1.5cm;
    }

    table {
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid black;
    }

    td {
        padding-left: 15px;
        padding-right: 15px;
    }

    thead {
        background-color: #f2f2f2;
    }

    th {
        padding: 15px 15px 15px 15px;
    }

    .page_break {
        page-break-before: always;
    }

    .td-no-top-border {
        border-top: 1px solid transparent !important;
    }

    .td-no-left-right-border {
        border-left: 1px solid transparent !important;
        border-right: 1px solid transparent !important;
    }

    .td-no-left-border {
        border-left: 1px solid transparent !important;
    }

    .td-no-bottom-border {
        border-bottom: 1px solid transparent !important;
    }

    .pagenum:before {
        content: counter(page);
    }
    </style>
</head>

<body>
    <table style="width: 100%;">
        <tr style="margin-bottom: 50px;">
            <td style="width: 100px;text-align:center;" class="td-no-top-border td-no-left-right-border" colspan="4">
                <h1 style="text-transform: capitalize; margin:5px">RENCANA PEMBELAJARAN SEMESTER (RPS)</h1>
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <img src="<?= 'public/assets/logoamikom.png' ?>" alt="Logo" style="width: 300px; margin:10px">
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <h2 style="margin:0px">MATA KULIAH : <?= $rps->nama_matakuliah ?></h2>
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center" colspan="4" class="td-no-left-right-border">
                <h2 style="margin: 0px;">Program Studi : <?= $rps->nama_prodi ?></h2>
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                Nomor
            </td>
            <td style="text-align:center">
                Tgl. Berlaku Mulai
            </td>
            <td style="text-align:center">
                Tgl. Disusun
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                Revisi
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                <i><?= $rps->nomor ?></i>
            </td>
            <td style="text-align:center">
                <i><?= date('d M Y', strtotime($rps->tgl_berlaku)) ?></i>
            </td>
            <td style="text-align:center">
                <i><?= date('d M Y', strtotime($rps->tgl_disusun)) ?></i>
            </td>
            <td style="text-align:center" class="td-no-left-right-border">
                <i><?= $rps->revisi ?></i>
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-right-border" colspan="4">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-right-border" colspan="4">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                Disetujui oleh, <br>Dekan <?= $rps->nama_fakultas ?>
            </td>
            <td style="text-align:center">
                Diperiksa oleh, <br>Kaprodi <?= $rps->nama_prodi ?>
            </td>
            <td style="text-align:center" colspan="2" class="td-no-left-right-border">
                Disusun oleh, <br>Koordinator Matakuliah
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                <div style="height:80px;"></div>
                <b><?= $rps->nama_dekan ?></b>
            </td>
            <td style="text-align:center">
                <div style="height:80px;"></div>
                <b><?= $rps->nama_kaprodi ?></b>
            </td>
            <td style="text-align:center" colspan="2" class="td-no-left-right-border">
                <div style="height:80px;"></div>
                <b><?= $rps->dosen_penyusun ?></b>
            </td>
        </tr>
        <tr>
            <td style="text-align:center" class="td-no-left-border">
                <?= $rps->nik ?>
            </td>
            <td style="text-align:center">
                <?= $rps->nik ?>
            </td>
            <td style="text-align:center" colspan="2" class="td-no-left-right-border">
                <?= $rps->nik ?>
            </td>
        </tr>
        <tr>
            <td style="width: 100px;text-align:center; margin-top:10px" colspan="4"
                class="td-no-left-right-border td-no-bottom-border">
                <h2 style="margin: 20 0 0 0">UNIVERSITAS AMIKOM YOGYAKARTA</h2>
                <h2 style="margin:0px">YOGYAKARTA</h2>
                <h2 style="margin:0px">2024</h2>
            </td>
        </tr>
    </table>


    <!-- Halaman 2 -->
    <div class="page_break"></div>
    <main style="margin-top: 10px;">
        <div>
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center; width: 10px;" rowspan="4">
                        <img src="<?= 'public/assets/logoamikom.png' ?>" alt="Logo" style="width: 150px;">
                    </td>
                    <td style="text-align: center;" rowspan="4">
                        <h3 style="margin:0px;">Rencana Pembelajaran Semester</h3>
                        <h3 style="margin:0px;">Program Studi : <?= $rps->nama_prodi ?></h3>
                        <h3 style="margin:0px;">MataKuliah <?= $rps->nama_matakuliah ?></h3>
                        <h3 style="margin:0px;"><?= $rps->kode_matkul ?></h3>
                    </td>
                    <td style="text-align: right;">
                        Nomor
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->nomor ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Tgl Disusun
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->tgl_disusun ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Revisi
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->revisi ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Halaman
                    </td>
                    <td style="text-align: left;">
                        <i>: <span class="pagenum"></span></i>
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-top:20px">
                <h4 style="margin:0px;padding:5px">1. Identitas</h4>
            </div>
            <table style="width: 100%; font-size:14px">
                <tr>
                    <td>
                        Program Studi
                    </td>
                    <td>
                        <?= $rps->nama_prodi ?>
                    </td>
                    <td>
                        Semester
                    </td>
                    <td colspan="5">
                        <?= $rps->sem_matkul ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama & Kode Mata Kuliah
                    </td>
                    <td>
                        <?= $rps->nama_matakuliah ?> | <?= $rps->kode_matkul ?>
                    </td>
                    <td>
                        Bobot SKS
                    </td>
                    <td colspan="5">
                        <?= $rps->bobot_sks ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">
                        Detail Prosentasi Penilaian
                    </td>
                    <td rowspan="3">
                        <?= $rps->detail_penilaian ?>
                    </td>
                    <td>
                        Dosen Pengampu
                    </td>
                    <td colspan="5">
                        <?= $rps->dosen_penyusun ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        Klasifikasi Nilai
                    </td>
                    <td style="text-align: center;">
                        >80
                    </td>
                    <td style="text-align: center;">
                        >60 & <80 </td>
                    <td style="text-align: center;">
                        >40 & <60 </td>
                    <td style="text-align: center;">
                        >20 & <40 </td>
                    <td style="text-align: center;">
                        < 20 </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        A
                    </td>
                    <td style="text-align: center;">
                        B
                    </td>
                    <td style="text-align: center;">
                        C
                    </td>
                    <td style="text-align: center;">
                        D
                    </td>
                    <td style="text-align: center;">
                        E
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">2. Gambaran Umum</h4>
            </div>
            <?= html_entity_decode($rps->gambaran_umum) ?>
            <div style="margin-bottom:20px;"></div>

            <div style="background-color:grey; margin-bottom:20px">
                <h4 style="margin:0px;padding:5px">3. Capaian Pembelajaran</h4>
            </div>
            <?= html_entity_decode($rps->capaian) ?>
            <div style="margin-bottom:20px;"></div>

            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">4. Prasyarat dan Pengetahuan Awal <i>(Prior Knowledge)</i></h4>
            </div>
            <?= html_entity_decode($rps->prasyarat) ?>



            <!-- Halaman 3 -->
            <div class="page_break"></div>
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center; width: 100px;" rowspan="4">
                        <img src="<?= 'public/assets/logoamikom.png' ?>" alt="Logo" style="width: 150px;">
                    </td>
                    <td style="text-align: center;" rowspan="4">
                        <h3 style="margin:0px;">Rencana Pembelajaran Semester</h3>
                        <h3 style="margin:0px;">Program Studi : <?= $rps->nama_prodi ?></h3>
                        <h3 style="margin:0px;">MataKuliah <?= $rps->nama_matakuliah ?></h3>
                        <h3 style="margin:0px;"><?= $rps->kode_matkul ?></h3>
                    </td>
                    <td style="text-align: right;">
                        Nomor
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->nomor ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Tgl Disusun
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->tgl_disusun ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Revisi
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->revisi ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Halaman
                    </td>
                    <td style="text-align: left;">
                        <i>: <span class="pagenum"></span></i>
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">5. Unit-Unit Pembelajaran secara spesifik</h4>
            </div>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr>
                        <th>
                            Kemampuan Akhir yang Diharapkan
                        </th>
                        <th>
                            Indikator
                        </th>
                        <th>
                            Bahan Kajian
                        </th>
                        <th>
                            Metode Pembelajaran
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Bahan Ajar
                        </th>
                    </tr>
                </thead>
                <?php foreach ($unit_pembelajaran as $key => $value) : ?>
                <tbody>
                    <tr valign="top">
                        <td>
                            <?= $value->kemampuan ?>
                        </td>
                        <td>
                            <?= $value->indikator ?>
                        </td>
                        <td>
                            <?= $value->bahan_kajian ?>
                        </td>
                        <td>
                            <?= $value->metode ?>
                        </td>
                        <td>
                            <?php foreach ($unit_details as $key) : ?>
                                <?= $key->waktu ?>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <?= $value->bahan_ajar ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>



            <!-- Halaman 4 -->
            <div class="page_break"></div>
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center; width: 100px;" rowspan="4">
                        <img src="<?= 'public/assets/logoamikom.png' ?>" alt="Logo" style="width: 150px;">
                    </td>
                    <td style="text-align: center;" rowspan="4">
                        <h3 style="margin:0px;">Rencana Pembelajaran Semester</h3>
                        <h3 style="margin:0px;">Program Studi : <?= $rps->nama_prodi ?></h3>
                        <h3 style="margin:0px;">MataKuliah <?= $rps->nama_matakuliah ?></h3>
                        <h3 style="margin:0px;"><?= $rps->kode_matkul ?></h3>
                    </td>
                    <td style="text-align: right;">
                        Nomor
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->nomor ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Tgl Disusun
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->tgl_disusun ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Revisi
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->revisi ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Halaman
                    </td>
                    <td style="text-align: left;">
                        <i>: <span class="pagenum"></span></i>
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">6. Tugas/Aktivitas dan Penilaian</h4>
            </div>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr>
                        <th>
                            Tugas/Aktivitas
                        </th>
                        <th>
                            Kemampuan Akhir yang diharapkan atau dievaluasi
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Bobot
                        </th>
                        <th>
                            Kriteria Penilaian
                        </th>
                        <th>
                            Indikator Penilaian
                        </th>
                    </tr>
                </thead>
                <?php foreach ($unit_tugas as $key => $value) : ?>
                <tbody>
                    <tr valign="top">
                        <td>
                            <?= $value->tugas ?>
                        </td>
                        <td>
                            <?= $value->kemampuan ?>
                        </td>
                        <td>
                            <?php foreach ($unit_details as $key) : ?>
                            <?= $key->waktu ?>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <?= $value->bobot ?>
                        </td>
                        <td>
                            <?= $value->kriteria_penilaian ?>
                        </td>
                        <td>
                            <?= $value->indikator_penilaian ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>


            <!-- Halaman 5 -->
            <div class="page_break"></div>
            <table style="width: 100%;">
                <tr>
                    <td style="text-align: center; width: 100px;" rowspan="4">
                        <img src="<?= 'public/assets/logoamikom.png' ?>" alt="Logo" style="width: 150px;">
                    </td>
                    <td style="text-align: center;" rowspan="4">
                        <h3 style="margin:0px;">Rencana Pembelajaran Semester</h3>
                        <h3 style="margin:0px;">Program Studi : <?= $rps->nama_prodi ?></h3>
                        <h3 style="margin:0px;">MataKuliah <?= $rps->nama_matakuliah ?></h3>
                        <h3 style="margin:0px;"><?= $rps->kode_matkul ?></h3>
                    </td>
                    <td style="text-align: right;">
                        Nomor
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->nomor ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Tgl Disusun
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->tgl_disusun ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Revisi
                    </td>
                    <td style="text-align: left;">
                        <i>: <?= $rps->revisi ?></i>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right;">
                        Halaman
                    </td>
                    <td style="text-align: left;">
                        <i>: <span class="pagenum"></span></i>
                    </td>
                </tr>
            </table>
            <div style="background-color:grey;margin-bottom:20px;margin-top:20px">
                <h4 style="margin:0px;padding:5px">7. Rencana Pelaksanaan Pembelajaran</h4>
            </div>
            <table style="width: 100%;font-size:14px">
                <thead>
                    <tr style='text-align:center'>
                        <th>Minggu</th>
                        <th>Kemampuan Akhir yang Diharapkan</th>
                        <th>Indikator</th>
                        <th>Topik & Sub Topik</th>
                        <th>Aktivitas & Strategi Pembelajaran</th>
                        <th>Waktu</th>
                        <th>Penilaian</th>
                    </tr>
                </thead>
                <?php foreach ($unit_details as $key => $value) : ?>
                <tbody>
                    <tr valign="top">
                        <td>
                            <?= $value->pertemuan ?>
                        </td>
                        <td>
                            <?= $value->kemampuan ?>
                        </td>
                        <td>
                            <?= $value->indikator ?>
                        </td>
                        <td>
                            <?= $value->topik ?>
                        </td>
                        <td>
                            <?= $value->aktivitas ?>
                        </td>
                        <td>
                            <?= $value->waktu ?>
                        </td>
                        <td>
                            <?= $value->penilaian ?>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </main>

</body>

</html>