<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Akun</title>
    <link rel="icon" href="<?php echo base_url('public/assets/icon-amikom.png');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/588acb177c.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: blueviolet;">
    <!--!TODO: implement Navbar component right here!-->
    <div class="main-content container d-flex align-items-center justify-content-center"
        style="margin-top: 20px; margin-bottom: 25px;">
        <div class="row container justify-content-center">
            <div>
                <a><button onclick="goBack()" class="btn btn-warning btn-create" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-left"></i> Back</button>
                </a>
            </div>
            <div class="d-flex flex-column text-start col-sm-6 col-6 rounded" style="background-color: #6c25be">
                <br />
                <p class="text-center" style="color: white; font-size: 20px; margin: 0px;"><b>Daftar Akun</b></p>
                <p class="text-center" style="color: white; font-size: 13px;">Silahkan isikan data dengan benar untuk
                    membuat akun</p>

                <!-- MEMBUAT FORM -->
                <form method="POST" action="<?php echo site_url('registrasi/process_registration');?>">
                    <!-- EMAIL -->
                    <div class="form-group col-md-11">
                        <div style="margin-left: 45px;">
                            <label for="inputNama" class="form-label"
                                style="color: white; font-size: 15px; margin:0px;">Nama</label>
                            <input type="text" class="form-control bg-light p-2" id="user_name" name="user_name"
                                placeholder="Masukkan nama anda" style="font-size: 14px;" required>
                        </div>

                        <div style="margin-left: 45px; margin-top: 10px;">
                            <label for="inputEmail" class="form-label"
                                style="color: white; font-size: 15px; margin:0px;">Email</label>
                            <input type="text" class="form-control bg-light p-2" id="user_email" name="user_email"
                                placeholder="Masukkan email anda" style="font-size: 14px;" required>
                        </div>

                        <div style="margin-left: 45px; margin-top: 10px;">
                            <label for="inputNik" class="form-label"
                                style="color: white; font-size: 15px; margin:0px;">NIK</label>
                            <input type="text" class="form-control bg-light p-2" id="nik" name="nik"
                                placeholder="Masukkan NIK anda" style="font-size: 14px;" required>
                        </div>

                        <div style="margin-left: 45px; margin-top: 10px;">
                            <label for="inputFakultas" class="form-label"
                                style="color: white; font-size: 15px;margin:0px;">Status</label>
                            <select class="form-control" id="user_status" name="user_status" style="font-size: 14px;"
                                required>
                                <option value="1">Admin</option>
                                <option value="2">Dosen</option>
                                <option value="3">Mahasiswa</option>
                            </select>
                        </div>

                        <div style="margin-left: 45px;margin-top:10px;">
                            <label for="inputPassword" class="form-label"
                                style="color: white; font-size: 15px; margin:0px;">Password</label>
                            <input type="password" class="form-control bg-light p-2" id="user_password"
                                name="user_password" placeholder="Masukkan password" style="font-size: 14px;" required>
                        </div>

                        <div class="form-check" style="margin-left: 45px; margin-top: 10px; margin-bottom: 10px;">
                            <input type="checkbox" class="form-check-input" required>
                            <label class="form-label" style="color: white; font-size: 13px;">Data yang saya masukkan
                                adalah data yang valid</label>
                        </div>

                        <!-- SUBMIT -->
                        <input type="submit" class="btn btn-warning" style="margin-left: 45px; width:90.5%"
                            value="Submit">
                        <div class="text-center">
                            <p style="color:white; margin-top: 15px; font-size:13px; margin-left:30px">Sudah punya
                                akun?
                                <a href="<?php echo base_url('/');?>" style="color:white;">Login Sekarang!</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!--!TODO: Implement Card Profile component right here-->

    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
</body>

</html>