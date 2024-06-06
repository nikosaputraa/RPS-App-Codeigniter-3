<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi RPS</title>
    <link rel="icon" href="<?php echo base_url('public/assets/icon-amikom.png');?>">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/sidebar/css/style.css');?>">
    <link href="<?php echo base_url('public/sidebar/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('public/sidebar/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/sidebar/css/adminlte.min.css');?>" rel="stylesheet">

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/588acb177c.js" crossorigin="anonymous"></script>
    <style>
    .callout {
        padding: 20px;
        margin: 0;
        border: 1px solid blueviolet;
        border-left-width: 5px;
        border-radius: 3px;
    };

    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->

        <div id="sidebar-wrapper" style="background-color: white; border-right: 1px solid #ddd;">
            <div class="img text-center py-4">
                <img src="<?php echo base_url('public/assets/icon-profilee.png');?>" width="100" height="100"
                    style="border-radius: 50%; margin-bottom: 15px; object-fit: cover;">
                <h5><?php echo $this->session->userdata('name'); ?></h5>
                <p style="font-size: 14px;"><?php echo $this->session->userdata('access'); ?></p>
            </div>

            <div class="list-group list-group-flush">
                <?php if($this->session->userdata('access')=='Administrator'){ ?>
                <a href="<?php echo site_url('home');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-house" style="margin-right: 10px;"></i>Dashboard</a>

                <a href="<?php echo site_url('admin/profile');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-user" style="margin-right: 10px;"></i> Profile</a>

                <a href="<?php echo site_url('admin/fakultas');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-building" style="margin-right: 10px;"></i> Fakultas</a>

                <a href="<?php echo site_url('admin/prodi');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-tag" style="margin-right: 10px;"></i> Prodi</a>

                <a href="<?php echo site_url('admin/daftar_dosen');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-rectangle-list" style="margin-right: 7px;"></i> Daftar Dosen</a>

                <a href="<?php echo site_url('admin/daftar_mahasiswa');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-list" style="margin-right: 9px;"></i> Daftar Mahasiswa</a>

                <a href="<?php echo site_url('file_rps');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-file-lines" style="margin-right: 12px;"></i> RPS Mata Kuliah</a>

                <?php } if($this->session->userdata('access')=='Dosen'){ ?>
                <a href="<?php echo site_url('home');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-house" style="margin-right: 10px;"></i>Dashboard</a>

                <a href="<?php echo site_url('dosen/profile');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-user" style="margin-right: 10px;"></i> Profile</a>

                <a href="<?php echo site_url('dosen/daftar_mahasiswa');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-list" style="margin-right: 9px;"></i> Daftar Mahasiswa</a>

                <a href="<?php echo site_url('dosen/daftar_matkul');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-folder-open" style="margin-right: 12px;"></i>Mata Kuliah</a>

                <a href="<?php echo site_url('file_rps');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-file-lines" style="margin-right: 18px;"></i>File RPS</a>

                <?php } if($this->session->userdata('access')=='Mahasiswa'){ ?>
                <a href="<?php echo site_url('home');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-house" style="margin-right: 10px;"></i>Dashboard</a>

                <a href="<?php echo site_url('mahasiswa/profile');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i
                        class="fa-solid fa-user" style="margin-right: 10px;"></i> Profile</a>

                <a href="<?php echo site_url('mahasiswa/daftar_matkul');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-folder-open" style="margin-right: 6px;"></i> Daftar Mata Kuliah</a>
                
                <a href="<?php echo site_url('mahasiswa/daftar_rps');?>" class="list-group-item list-group-item-action" style="background-color: white;"><i 
                        class="fa-solid fa-file-lines" style="margin-right: 16px;"></i>File RPS</a>
                <?php }; ?>

            </div>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="background-color: #edecec;">

            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6c25be;">
                <button class="btn btn-warning btn-sm" id="menu-toggle" style="color: white;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div style="margin-left: 15px;">
                    <a><img src="<?php echo base_url('public/assets/logo-amikom.png');?>" width="80" height="30"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                         <li style="margin-top: auto; margin-bottom: auto;">
                            <a class="btn btn-danger" href="<?php echo site_url('login/logout');?>" style="color: white; font-size:13px;">
                            <i class="fa-solid fa-right-from-bracket" style="margin-right: 5px;"></i>Keluar</a>
                        </li>
                    </ul>
                </div>
            </nav>