<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login RPS</title>
    <link rel="icon" href="public/assets/icon-amikom.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/588acb177c.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: blueviolet;">
    <!--!TODO: implement Navbar component right here!-->
    <div class="main-content container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <?php echo $this->session->flashdata('msg');?>
        <div class="row container justify-content-center">

            <?php if ($this->session->flashdata('success_message')) : ?>
            <script type="text/javascript">
            alert("<?= $this->session->flashdata('success_message'); ?>");
            </script>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error_message')) : ?>
            <script type="text/javascript">
            alert("<?= $this->session->flashdata('error_message'); ?>");
            </script>
            <?php endif; ?>


            <div class="d-flex flex-column text-start col-sm-5 col-6 rounded mt-5" style="background-color: #6c25be">
                <a class="navbar-brand" href="#">
                    <br />
                    <center>
                        <img src="public/assets/logo-amikom.png" width="200" height="70" class="navbar-logo" />
                    </center>
                </a>
                <br />
                <p class="text-center" style="color: white; font-size: 13px;">Silahkan Login dengan Email dan Password
                    AMIKOM anda</p>


                <!-- MEMBUAT FORM -->
                <form method="POST" action="<?php echo site_url('login/autentikasi');?>">
                    <!-- EMAIL -->
                    <div class="form-group col-md-11 ">
                        <div class="mb-3" style="margin-left: 35px; margin-top: 10px;">
                            <label for="inputEmail" class="form-label"
                                style="color: white; font-size: 15px;">Email</label>
                            <input type="email" class="form-control bg-light p-2" id="email" name="email"
                                placeholder="Masukkan email">
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4" style="margin-left: 35px;">
                            <label for="inputPassword" class="form-label"
                                style="color: white; font-size: 15px;">Password</label>
                            <input type="password" class="form-control bg-light p-2" id="pass" name="pass"
                                placeholder="Masukkan password">
                            <p style="margin-top: 8px; color: white; font-size: 14px;">
                                <a href="#" style="color:white;">Lupa Password?</a>
                            </p>
                        </div>
                        <!-- SUBMIT -->
                        <input type="submit" class="btn btn-warning col-md-11 mb-5 p-2" style="margin-left: 35px;"
                            value="Login">
                </form>
            </div>
        </div>
        <p class="text-center" style="color:white; margin-top: 15px; margin-bottom: 25px;">Belum punya akun?
            <a href="<?php echo site_url('registrasi');?>" style="color:white;">Daftar Sekarang!</a>
        </p>
    </div>

    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
</body>

</html>