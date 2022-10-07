<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_admin(); // role akses
        $this->load->model(['user_m', 'profiluser_m', 'daerah_m']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->fungsi->user_login()->user_id;
        $data['row'] = $this->profiluser_m->get($id);
        $this->template->load('template', 'profil_user/v_profil_user_data', $data);
    }

    public function edit($id)
    {
        $query = $this->profiluser_m->get($id);
        $kabkota = $this->daerah_m->get_kabkota();
        $provinsi = $this->daerah_m->get_prov();
        if ($query->num_rows() > 0) {
            $item = $query->row();
            $data = array(
                'page' => 'edit',
                'kabkota' => $kabkota,
                'provinsi' => $provinsi,
                'row' => $item
            );
            $this->template->load('template', 'profil_user/v_profil_user_data_add', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan'); </script>";
            echo "<script> window.location = '" . site_url('user') . "'</script>";
        }
    }


    public function process()
    {
        $post = $this->input->post(null, TRUE);

        $config['upload_path']   = './uploads/berkas/profil';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 1024;
        $config['file_name']     = 'IMG-' . $post['user_id'] . '-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        if (isset($_POST['edit'])) {

            if (@$_FILES['ktp']['name'] != null || @$_FILES['foto']['name'] != null || @$_FILES['kartu_pers']['name'] != null || @$_FILES['npwp']['name'] != null) {

                $item = $this->profiluser_m->get($post['user_id'])->row();
                // proses//
                if ($this->upload->do_upload('ktp')) {
                    if ($item->ktp != null) {
                        $target_file = './uploads/berkas/profil/' . $item->ktp;
                        unlink($target_file);
                    }
                    $post['ktp'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('foto')) {
                    if ($item->foto != null) {
                        $target_file = './uploads/berkas/profil/' . $item->foto;
                        unlink($target_file);
                    }
                    $post['foto'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('kartu_pers')) {
                    if ($item->kartu_pers != null) {
                        $target_file = './uploads/berkas/profil/' . $item->kartu_pers;
                        unlink($target_file);
                    }
                    $post['kartu_pers'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('npwp')) {
                    if ($item->npwp != null) {
                        $target_file = './uploads/berkas/profil/' . $item->npwp;
                        unlink($target_file);
                    }
                    $post['npwp'] = $this->upload->data('file_name');
                }
                $this->profiluser_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    redirect('profil_user');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('profil_user/edit');
                }
            } else {
                $post['ktp'] = null;
                $post['foto'] = null;
                $post['npwp'] = null;
                $post['kartu_pers'] = null;
                $this->profiluser_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                }
                redirect('profil_user');
            }
        }
    }

    public function confirm_user($id)
    {
        $post = $this->profiluser_m->get($id)->row();
        $this->profiluser_m->confirm($post);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Diapprove');
        }
        redirect('profil_user');
    }
}
