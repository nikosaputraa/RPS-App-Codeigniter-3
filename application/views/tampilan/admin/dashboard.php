    <!-- Page Content -->
    <div class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column col-11 rounded" style="background-color: white; margin-top: 30px; 
        margin-bottom: 40px;">
            <center>
                <img src="<?php echo base_url('public/assets/gambar_mhs.jpg');?>" alt="gambar_mhs" style="width: 42%;">
            </center>
            <h4 class="text-center" style="margin: 0px;">Selamat Datang</h4>
            <p class="text-center" style="font-size: 13px;">Selamat datang di aplikasi website RPS (Rencana Pembelajaran
                Semester)</p>

            <div class="col-11 mx-auto mb-4">
                <?php if($this->session->userdata('access')=='Administrator'){ ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-info">
                                <div class="inner mb-2">
                                    <h4>Profile</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="<?php echo site_url('admin/profile');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-primary">
                                <div class="inner mb-2">
                                    <h4>Fakultas</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <a href="<?php echo site_url('admin/fakultas');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-warning">
                                <div class="inner mb-2">
                                    <h4>Prodi</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <a href="<?php echo site_url('admin/prodi');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-success">
                                <div class="inner mb-2">
                                    <h4>Dosen</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?php echo site_url('admin/daftar_dosen');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="small-box bg-danger">
                                <div class="inner mb-2">
                                    <h4>Mahasiswa</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?php echo site_url('admin/daftar_mahasiswa');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="small-box bg-dark">
                                <div class="inner mb-2">
                                    <h4>Daftar RPS</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-lines"></i>
                                </div>
                                <a href="<?php echo site_url('file_rps');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } if($this->session->userdata('access')=='Dosen'){ ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-info">
                                <div class="inner mb-2">
                                    <h4>Profile</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="<?php echo site_url('dosen/profile');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-primary">
                                <div class="inner mb-2">
                                    <h4>Mahasiswa</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="<?php echo site_url('dosen/daftar_mahasiswa');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-success">
                                <div class="inner mb-2">
                                    <h4>Mata Kuliah</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <a href="<?php echo site_url('dosen/daftar_matkul');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="small-box bg-danger">
                                <div class="inner mb-2">
                                    <h4>File RPS</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-lines"></i>
                                </div>
                                <a href="<?php echo site_url('file_rps');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } if($this->session->userdata('access')=='Mahasiswa'){ ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="small-box bg-info">
                                <div class="inner mb-2">
                                    <h4>Profile</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="<?php echo site_url('mahasiswa/profile');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="small-box bg-success">
                                <div class="inner mb-2">
                                    <h4>Mata Kuliah</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <a href="<?php echo site_url('mahasiswa/daftar_matkul');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="small-box bg-danger">
                                <div class="inner mb-2">
                                    <h4>File RPS</h4>
                                    <p></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-lines"></i>
                                </div>
                                <a href="<?php echo site_url('mahasiswa/daftar_rps');?>" class="small-box-footer">
                                    More Info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->