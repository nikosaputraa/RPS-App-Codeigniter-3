<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-sm-11 col-11 rounded"
        style="background-color: white; margin-top: 30px; margin-bottom: 40px;">
        <br />
        <p class="text-center" style="font-size: 20px; margin: 0px;"><b>Details Data Materi</b></p>
        <p class="text-center" style="font-size: 13px;">Berikut adalah details dari data materi</p>

        <div class="row mb-4">
            <div class="container-fluid">
                <a><button onclick="goBack()" class="btn btn-warning btn-create" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-left"></i></button></a>

                <form action="<?php echo site_url('dosen/update_materi');?>" method="POST">
                    <table class="table table-bordered table-striped mt-2" style="font-size: 13px;">

                        <?php $id_matkul = $this->uri->segment(3) ?>
                        <?php $id_materi = $this->uri->segment(4) ?>
                        <?php $kode_matkul = $this->uri->segment(5) ?>

                        <thead>
                            <tr>
                                <th colspan="3">Details Materi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($materi as $data): ?>
                            <tr>
                                <input type="hidden" name="id_matkul" value="<?php echo $id_matkul ?>">
                                <input type="hidden" name="id_materi" value="<?php echo $id_materi ?>">
                                <input type="hidden" name="kode_matkul" value="<?php echo $kode_matkul ?>">
                                <td class="col-3" style="width: 20%;">Pertemuan</td>
                                <td style="width: 80%;">
                                    <select class="form-control p-2" id="pertemuan" name="pertemuan"
                                        style="font-size: 14px;">
                                        <option selected hidden value="<?php echo $data->pertemuan; ?>"><?php echo $data->pertemuan; ?></option>
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
                                </td>
                            </tr>

                            <tr>
                                <td>Judul Materi</td>
                                <td>
                                    <input type="text" class="form-control p-2" name="judul_materi" id="judul_materi"
                                        value="<?php echo $data->judul_materi; ?>" style="font-size: 13px;">
                                </td>
                            </tr>

                            <tr>
                                <td>Capaian Pembelajaran</td>
                                <td>
                                    <input type="text" class="form-control p-2" name="cp_pembelajaran"
                                        id="cp_pembelajaran" value="<?php echo $data->cp_pembelajaran; ?>"
                                        style="font-size: 13px;">
                                </td>
                            </tr>

                            <tr>
                                <td>Deskripsi Mata Kuliah</td>
                                <td>
                                    <textarea class="p-2" rows="5" id="des_materi" name="des_materi" style="width: 100%; border-radius: 5px;
                font-size: 13px; border: 1px solid lightgrey;"><?php echo $data->des_materi; ?></textarea>
                                </td>
                            </tr>

                            <tr>
                                <td>Tanggal Diperbarui</td>
                                <td>
                                    <input type="date" class="form-control p-2" name="tgl_dibuat" id="tgl_dibuat"
                                        value="<?php echo $data->tgl_dibuat; ?>" style="font-size: 13px;">
                                </td>
                            </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                    <a>
                        <button class="btn btn-primary" name="edit_materi" type="submit" style="font-size: 13px;">Update
                            Data</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>