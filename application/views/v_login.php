<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Siskapurwakarta | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/main.css">

    <link rel="shortcut icon" href="<?= base_url() ?>uploads/logo.png">

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php //session_start(); 
?>

<body class="hold-transition login-page">
    <!-- <div class="login-box">
        <div class="login-logo">
            <a><b>Siska</b>Purwakarta</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="<?= site_url('auth/process') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
            <a href="#" style="text-align:left;">
                <p> Lupa password</p>
            </a>
            <a href="<?= site_url('registrasi/add') ?>" style="text-align:left;">
                <p> Buat akun baru</p>
            </a>
        </div>
    </div> -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url() ?>assets/login_components/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="login-logo">
                    <a style="font-size:26px ;"><b>Siska</b>Purwakarta</a>
                </div>
                <form class="login100-form validate-form" action="<?= site_url('auth/process') ?>" method="post">
                    <span class="login100-form-title p-b-20">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input m-b-23">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="username" placeholder="Masukan Email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukan Password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <!-- <a href="#">
                            Forgot password?
                        </a> -->
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name="login" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="flex-col-c p-t-10">
                        <!-- <span class="txt1 p-b-10">
                            Or Sign Up Using
                        </span> -->

                        <a href="<?= site_url('registrasi/add') ?>" class="txt1">
                            Registrasi Akun Baru
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_components/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?= base_url() ?>assets/login_components/js/main.js"></script>

</body>

</html>