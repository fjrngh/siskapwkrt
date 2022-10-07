<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_already_login();
        $this->load->view('v_login');
    }

    public function process()
    {
        // session_start();
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post); ?>

            <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_components/css/main.css">

            <script src="<?= base_url() ?>assets/login_components/vendor/animsition/js/animsition.min.js"></script>
            <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/popper.js"></script>
            <script src="<?= base_url() ?>assets/login_components/vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="<?= base_url() ?>assets/login_components/vendor/countdowntime/countdowntime.js"></script>
            <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
            <script src="<?= base_url() ?>assets/login_components/js/main.js"></script>

            <style>
                body {
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 1.124em;
                    font-weight: normal;
                }
            </style>

            <body class="container-login100" style="background-image: url('<?= base_url() ?>assets/login_components/images/bg-01.jpg');"></body>

            <?php
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);

                // alert data succes
            ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Selamat datang',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result) {
                            window.location = '<?= site_url('dashboard') ?>';
                        }
                    })
                </script><?php
                        } else {
                            // alert data gagal
                            ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Failure',
                        text: 'Login gagal, username / password salah'
                    }).then((result) => {
                        if (result) {
                            window.location = '<?= site_url('auth/login') ?>';
                        }
                    })
                </script><?php
                        }
                    }
                }

                public function logout()
                {
                    $params = array('userid', 'level');
                    $this->session->unset_userdata($params);
                    redirect('auth/login');
                }
            }
