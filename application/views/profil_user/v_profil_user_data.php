<section class="content-header">
    <h1>
    </h1>
</section>
<section class="invoice">
    <?php //$this->view('message'); 
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>

    <!-- <div class="container"> -->
    <?php foreach ($row->result() as $key => $data) { ?>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col align-items-center text-center">
                <address>
                    <strong style="font-size:160%;">Profil User</strong><br><br>

                </address>
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- </br> -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center" style="margin: 30px 30px;">
                        <?php if (empty($this->fungsi->user_login()->foto)) { ?>
                            <img src="<?= base_url('assets/login_components/images/profile-128.png') ?>" class="img-circle">
                        <?php } else { ?>
                            <img src="<?= base_url('uploads/berkas/profil/' . $data->foto) ?>" alt="Admin" class="img-circle" width="210">
                        <?php } ?>
                        <div class="mt-3">
                            <h4><?= $data->nama; ?></h4>
                            <p class="text-muted font-size-sm"><?= $data->address; ?></p>
                        </div>
                        <a class="btn btn-info " href="<?= site_url('profil_user/edit/' . $this->fungsi->user_login()->user_id) ?>">Ubah Profil | Upload Berkas</a> <br><br>
                        <?php if (empty($this->fungsi->user_login()->status_user)) { ?>
                            <h3 class="text-danger font-weight-bold">Akun Belum Terverifikasi</h3>
                            <p class="text-danger font-size-sm">Harap mengisi semua data pribadi yang tersedia agar bisa diajukan pendaftaran diri!</p>
                            <a class="btn btn-danger " href="<?= site_url('profil_user/confirm_user/' . $this->fungsi->user_login()->user_id) ?>">Ajukan Data Diri</a><br>
                        <?php } elseif (($this->fungsi->user_login()->status_user) == 3) { ?>
                            <h3 class="text-danger font-weight-bold">Akun Sedang Diajukan</h3>
                            <p class="text-danger font-size-sm">Harap menunggu konfirmasi data pribadi anda!</p>
                        <?php } elseif (($this->fungsi->user_login()->status_user) == 2) { ?>
                            <h3 class="text-danger font-weight-bold">Pengajuan Akun Gagal</h3>
                            <p class="text-danger font-size-sm">Harap mengisi semua data pribadi anda!</p>
                            <a class="btn btn-danger " href="<?= site_url('profil_user/confirm_user/' . $this->fungsi->user_login()->user_id) ?>">Ajukan Data Diri</a><br>
                        <?php } else {
                        } ?>

                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-6 invoice-col ">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?= $data->nama ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= $data->username ?>
                                </td>
                            </tr>
                            <tr>
                                <td>No Telp</td>
                                <td><?= $data->no_telp ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?= $data->address ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td><?= $data->nama_kabkota ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td><?= $data->nama_provinsi ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center text-center">
                    <div class="card-body-img">
                        <div class="card mt-3 align-items-center text-center">
                            <p class="text-muted font-size-sm">Berkas Upload Gambar</p>
                            <!-- <div class="row" style="padding:0px 15px ;"> -->
                            <div class="col-3 col-sm-3">
                                <h6 class="mb-0"></h6>
                                <?php if ($data->ktp != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $data->ktp) ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } else { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('assets/login_components/images/folder-attachment-64.png') ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } ?>
                                <span class="text-secondary">E-KTP</span>
                            </div>
                            <div class="col-3 col-sm-3">
                                <h6 class="mb-0"></h6>
                                <?php if ($data->foto != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $data->foto) ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } else { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('assets/login_components/images/folder-attachment-64.png') ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } ?>
                                <span class="text-secondary">Foto Wartawan</span>
                            </div>
                            <!-- </div>
                            <div class="row" style="padding:0px 15px ;"> -->
                            <div class="col-3 col-sm-3">
                                <h6 class="mb-0"></h6>
                                <?php if ($data->kartu_pers != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $data->kartu_pers) ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } else { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('assets/login_components/images/folder-attachment-64.png') ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } ?>
                                <span class="text-secondary">Kartu Pers</span>
                            </div>
                            <div class="col-3 col-sm-3">
                                <h6 class="mb-0"></h6>
                                <?php if ($data->npwp != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $data->npwp) ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } else { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('assets/login_components/images/folder-attachment-64.png') ?>" style="width: 37%;">
                                    </div>
                                <?php
                                } ?>
                                <span class="text-secondary">NPWP</span>
                            </div>
                            <!-- </div> -->
                            </br>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="col-sm-3 invoice-col">
            </div> -->
        </div>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- </div> -->
</section>