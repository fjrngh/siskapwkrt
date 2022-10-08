<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MimClothing | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>uploads/logo.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/main.css">
    <link href="<?= base_url() ?>assets/login_components/css/main2.css" rel="stylesheet" media="all">


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php //session_start(); 
?>

<body>
    <!-- <div class="login-box">
        <div class="login-logo">
            <a><b>Siska</b>Purwakarta</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign up to start your session</p>

            <form action="" method="POST">
                <div class="form-group <?= form_error('nama_lengkap') ? 'has-error' : null ?> has-feedback">
                    <label>Name *</label>
                    <input type="text" name="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" class="form-control">
                    <?= form_error('nama_lengkap') ?>
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                </div>
                <div class="form-group <?= form_error('no_telp') ? 'has-error' : null ?> has-feedback">
                    <label>No Telp / HP *</label>
                    <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telp/HP">
                    <?= form_error('no_telp') ?>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Alamat *</label>
                    <textarea name="address" class="form-control"><?= set_value('address') ?></textarea>
                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                </div>
                <div class="form-group <?= form_error('provinsi') ? 'has-error' : null ?> has-feedback">
                    <label>Prvinsi *</label>
                    <select name="provinsi" class="form-control" placeholder="Provinsi">
                        <option value=""> -- Pilih Provinsi -- </option>
                        <?php foreach ($prov->result() as $key => $data) { ?>
                            <option value="<?= $data->id ?>"><?= $data->name ?></option>
                        <?php } ?>
                    </select>
                    <?= form_error('provinsi') ?>
                </div>
                <div class="form-group <?= form_error('kabkota') ? 'has-error' : null ?> has-feedback">
                    <label>Kabupaten / Kota *</label>
                    <select name="kabkota" class="form-control" placeholder="Kabupaten/Kota">
                        <option value=""> -- Pilih Kabupaten/Kota -- </option>
                        <?php foreach ($kabkota->result() as $key => $data) { ?>
                            <option value="<?= $data->id ?>"><?= $data->name ?></option>
                        <?php } ?>
                    </select>
                    <?= form_error('kabkota') ?>
                </div>
                <div class="form-group <?= form_error('kodepos') ? 'has-error' : null ?> has-feedback">
                    <label>Kode Pos *</label>
                    <input type="text" name="kodepos" class="form-control" placeholder="Kode Pos">
                    <span class="glyphicon glyphicon-qrcode form-control-feedback"></span>
                    <?= form_error('kodepos') ?>
                </div>
                <div class="form-group <?= form_error('username') ? 'has-error' : null ?> has-feedback">
                    <label>Email *</label>
                    <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                    <?= form_error('username') ?>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group <?= form_error('password') ? 'has-error' : null ?> has-feedback">
                    <label>Password *</label>
                    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                    <?= form_error('password') ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?> has-feedback">
                    <label>Password Confirmation *</label>
                    <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class="form-control">
                    <?= form_error('passconf') ?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-paper-plane"> Daftar</i></button>
                    <a href="<?= site_url('user/add') ?>" class="btn btn-secondary btn-flat"><i class="fa fa-undo"> Back</i></a>
                </div>
            </form>
        </div>
    </div> -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>assets/login_components/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="login-logo">
                    <a style="font-size:26px ;"><b>Siska</b>Purwakarta</a>
                </div>
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-20">
                        Registrasi
                    </span>


                    <div class="wrap-input100 validate-input m-b-5 <?= form_error('nama_lengkap') ? 'has-error' : null ?>">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" value="<?= set_value('nama_lengkap') ?>" name="nama_lengkap" placeholder="Masukan Nama">
                        <?= form_error('nama_lengkap') ?>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-5 <?= form_error('address') ? 'has-error' : null ?>">
                        <span class="label-input100">Alamat</span>
                        <input class="input100" type="text" value="<?= set_value('address') ?>" name="address" placeholder="Masukan Alamat">
                        <?= form_error('address') ?>
                        <span class="focus-input100" data-symbol="&#xf175;"></span>
                        <!-- <span class="glyphicon glyphicon-road form-control-feedback"></span> -->
                    </div>
                    <div class="input-group-input100">
                        <div class="wrap-input100">
                            <!-- <div class="form-group"> -->
                            <span class="label-input100">Provinsi</span>
                            </br>&nbsp;
                            <div class="rs-select2 js-select-simple input100">
                                <select name="provinsi" id="provinsi">
                                    <option value=""> -- Pilih Provinsi -- </option>
                                    <?php foreach ($prov->result() as $key => $data) { ?>
                                        <option value="<?= $data->id ?>"><?= $data->name ?></option>
                                    <?php } ?>
                                </select>
                                <div class="select-dropdown"></div>
                                <span class="focus-input100" data-symbol="&#xf201;"></span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="input-group-input100 mx-auto">
                        <div class="wrap-input100">
                            <!-- <div class="form-group"> -->
                            <span class="label-input100">Kabupaten / Kota</span>
                            </br>&nbsp;
                            <div class="rs-select2 js-select-simple input100">
                                <select name="kabkota" id="kabkota" class="kabkota form-control">
                                    <option value=""> -- Pilih Kabupaten / Kota -- </option>
                                </select>
                                <div class="select-dropdown"></div>
                                <span class="focus-input100" data-symbol="&#xf201;"></span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="wrap-input100 validate-input m-b-5 <?= form_error('no_telp') ? 'has-error' : null ?> has-feedback">
                                <span class="label-input100">No Telp</span>
                                <input class="input100" type="text" value="<?= set_value('no_telp') ?>" name="no_telp" placeholder="Masukan No Telp">
                                <?= form_error('no_telp') ?>
                                <span class="focus-input100" data-symbol="&#xf2bc;"></span>
                            </div>
                        </div>
                        <div class="col-2">
                            <!-- <div class="input-group"> -->
                            <div class="wrap-input100 validate-input m-b-5 <?= form_error('kodepos') ? 'has-error' : null ?> has-feedback">
                                <span class="label-input100">Kode Pos</span>
                                <input class="input100" type="text" value="<?= set_value('kodepos') ?>" name="kodepos" placeholder="Masukan Kode Pos">
                                <?= form_error('kodepos') ?>
                                <span class="focus-input100" data-symbol="&#xf2bc;"></span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- <div class="wrap-input100 validate-input m-b-5">
                        <span class="label-input100">Alamat</span>
                    </div> -->




                    <div class="wrap-input100 validate-input m-b-5 <?= form_error('username') ? 'has-error' : null ?> has-feedback">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="username" value="<?= set_value('username') ?>" placeholder="Masukan Email">
                        <?= form_error('username') ?>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input <?= form_error('password') ? 'has-error' : null ?> has-feedback">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" value="<?= set_value('password') ?>" name="password" placeholder="Masukan Password">
                        <?= form_error('password') ?>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div class="wrap-input100 validate-input <?= form_error('passconf') ? 'has-error' : null ?> has-feedback">
                        <span class="label-input100">Password Confirmation</span>
                        <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class="input100" placeholder="Masukan Konfirmasi Password">
                        <?= form_error('passconf') ?>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <!-- <a href="#">
                            Forgot password?
                        </a> -->
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Registrasi
                            </button>
                            <!-- <button type="submit" class="btn btn-success btn-flat"> -->
                        </div>
                    </div>
                    <div class="flex-col-c p-t-10">
                        <!-- <span class="txt1 p-b-10">
                            Or Sign Up Using
                        </span> -->

                        <a href="<?= site_url('auth/login') ?>" class="txt1">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_components/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?= base_url() ?>assets/login_components/js/main.js"></script>
    <script src="<?= base_url() ?>assets/login_components/js/global.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#provinsi').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo base_url(); ?>registrasi/get_subkabkota",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        $('.kabkota').html(html);

                    }
                });
            });
        });
    </script>

</body>

</html>