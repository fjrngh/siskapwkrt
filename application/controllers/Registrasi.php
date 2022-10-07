<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model(['user_m', 'daerah_m']);
        $this->load->library('form_validation');
    }

    public function add()
    {
        $dtprov = $this->daerah_m->get_prov();

        $dtkabkota = $this->daerah_m->get_kabkota();

        $this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('kodepos', 'Kode Pos', 'required');
        // $this->form_validation->set_rules('kabkota', 'Kabupaten / Kota');
        // $this->form_validation->set_rules('provinsi', 'Provinsi');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]', array('matches' => ' %s Tidak sesuai'));
        $this->form_validation->set_rules('address', 'Address');
        // $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s ini sudah terpakai');

        // set text error jadi merah
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'prov' => $dtprov,
                'kabkota' => $dtkabkota,
            );
            $this->load->view('registrasi/v_user_registrasi', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) { ?>
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
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Silahkan Login dengan akun anda',
                        showConfirmButton: false,
                        timer: 3100
                    }).then((result) => {
                        if (result) {
                            window.location = '<?= site_url('auth/login') ?>';
                        }
                    })
                </script>
<?php
            }
        }
    }
}
