<div class="d-flex flex-column align-items-center">
    <div class="d-flex flex-column col-11" style="margin-top: 10px; margin-bottom: 40px;">
        <br />
        <div class="card mb-4">
            <div class="card-header text-center">
                <h3 class="text-center" style="font-size: 20px;"><b>Profile</b></h3>
                <p class="text-center" style="font-size: 13px; margin:0px;">Berikut adalah data lengkap profil anda</p>
            </div>
            <div class="card-body">
                <center>
                    <img src="<?php echo base_url('public/assets/icon-profilee.png');?>" class="img rounded" width="150"
                        height="150" style="object-fit: cover;">
                </center>
                <div class="col-7">
                    <div class="row">
                        <label for="nama" class="col-md-3 col-form-label text-md-end">Nama</label>
                        <div class="my-auto">:</div>
                        <div class="col-md-8 my-auto">
                            <?php echo $this->session->userdata('name'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-3 col-form-label text-md-end">Email</label>
                        <div class="my-auto">:</div>
                        <div class="col-md-8 my-auto">
                            <?php echo $this->session->userdata('email'); ?>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="email" class="col-md-3 col-form-label text-md-end">Status</label>
                        <div class="my-auto">:</div>
                        <div class="col-md-8 my-auto">
                            <?php echo $this->session->userdata('access'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted text-center">
            </div>
        </div>
    </div>
</div>