<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>uploads/logo.png">

    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/main.css">
    <link href="<?= base_url() ?>assets/login_components/css/main2.css" rel="stylesheet" media="all"> -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <style>
        .swal2-popup {
            font-size: 1.6rem !important;
        }
    </style>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue layout-boxed sidebar-mini" style="background-image: url('<?= base_url() ?>assets/login_components/images/bg-01.jpg');">
    <div class="wrapper">
        <header class="main-header">
            <a href="<?= base_url('dashboard') ?>" class="logo">
                <span class="logo-mini"><b>M</b>CL</span>
                <span class="logo-lg"><b>SISKA</b>Purwakarta</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-danger">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 3 tasks</li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <h3>Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if (empty($this->fungsi->user_login()->foto)) { ?>
                                    <img src="<?= base_url('assets/login_components/images/profile-32.png') ?>" class="user-image">
                                <?php } else { ?>
                                    <img src="<?= base_url('uploads/berkas/profil/' . $this->fungsi->user_login()->foto) ?>" class="user-image">
                                <?php } ?>
                                <span class="hidden-xs"><?= $this->fungsi->user_login()->username; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <?php if (empty($this->fungsi->user_login()->foto)) { ?>
                                        <img src="<?= base_url('assets/login_components/images/profile-128.png') ?>" class="img-circle">
                                    <?php } else { ?>
                                        <img src="<?= base_url('uploads/berkas/profil/' . $this->fungsi->user_login()->foto) ?>" class="img-circle">
                                    <?php } ?>
                                    <p><?= $this->fungsi->user_login()->nama; ?>
                                        <small><?= $this->fungsi->user_login()->address; ?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= site_url('profil_user') ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= site_url('auth/logout') ?>" class="btn btn-flat bg-red">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <?php if (empty($this->fungsi->user_login()->foto)) { ?>
                            <img src="<?= base_url('assets/login_components/images/profile-64.png') ?>" class="user-circle">
                        <?php } else { ?>
                            <img src="<?= base_url('uploads/berkas/profil/' . $this->fungsi->user_login()->foto) ?>" class="img-circle">
                        <?php } ?>
                        <!-- <img src="<?= base_url('uploads/berkas/profil/' . $this->fungsi->user_login()->foto) ?>" class="img-circle"> -->
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->fungsi->user_login()->username) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li <?= $this->uri->segment(1) == 'profil_user' ? 'class="active"' : '' ?>>
                        <a href="<?= site_url('profil_user') ?>"><i class="fa fa-user"></i> <span>Profil</span></a>
                    </li>
                    <?php if ($this->fungsi->user_login()->status_user == 1 && $this->fungsi->user_login()->level == 2) { ?>
                        <li class="treeview <?= $this->uri->segment(1) == 'berita' ? 'active' : '' ?>">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i> <span>Media Berita</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li <?= $this->uri->segment(1) == 'berita' && $this->uri->segment(2) == 'add' ? 'class="active"' : '' ?>><a href="<?= site_url('berita/add') ?>"><i class="fa fa-circle-o"></i> Tambahkan Media</a></li>
                                <li <?= $this->uri->segment(1) == 'berita' && $this->uri->segment(2) == '' ? 'class="active"' : '' ?>><a href="<?= site_url('berita') ?>"><i class="fa fa-circle-o"></i> List Media</a></li>
                            </ul>
                        </li>
                    <?php } ?>

                    <!-- Untuk Pembatas Menu Hak Akses -->
                    <?php if ($this->fungsi->user_login()->level == 1) { ?>
                        <li class="header">MAIN ADMIN</li>
                        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('user') ?>"><i class="fa fa-user"></i> <span>Users</span></a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'berita_admin' ? 'class="active"' : '' ?>>
                            <a href="<?= site_url('berita_admin') ?>"><i class="fa fa-newspaper-o"></i> <span>List All Media</span></a>
                        </li>

                    <?php } ?>
                </ul>
            </section>
        </aside>

        <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

        <div class="content-wrapper">
            <!-- <div class="container-login100" style="background-image: url('<?= base_url() ?>assets/login_components/images/bg-01.jpg');"> -->
            <?php echo $contents ?>
            <!-- </div> -->
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <!-- <b>Version</b> 2.4.0 -->
            </div>
            <strong>Copyright &copy; 2022 <a href="localhost/siskapurwakarta">SISKA Purwakarta</a>.</strong>
            <small>Sistem Kerjasama Media DPRD Purwakarta</small>
        </footer>


        <div class="control-sidebar-bg"></div>
    </div>

    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <!-- <script src="<?= base_url() ?>assets/login_components/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/select2/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url() ?>assets/login_components/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?= base_url() ?>assets/login_components/js/main.js"></script>
    <script src="<?= base_url() ?>assets/login_components/js/global.js"></script> -->
    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            // isi dari swal template
            Swal.fire({
                icon: 'success',
                title: 'success',
                text: flash
            })
        }

        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus! ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })

        $(document).on('click', '#btn-confirm', function(e) {
            e.preventDefault();
            var linkacc = $(this).attr('href') + '/1';
            var linkdeny = $(this).attr('href') + '/2';
            // console.log(link);

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan diapprove /  reject! ",
                icon: 'warning',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                // cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm',
                denyButtonText: `Reject`,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = linkacc;
                } else if (result.isDenied) {
                    window.location = linkdeny;
                }
            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#table1').DataTable()
        })
    </script>
</body>

<!-- test push -->

</html>