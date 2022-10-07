<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin(); // role akses
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->user_m->get();
        $this->template->load('template', 'user/v_user_data', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]', array('matches' => ' %s Tidak sesuai'));
        // $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s ini sudah terpakai');

        // set text error jadi merah
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/v_user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
            }
            redirect('user');
        }
    }

    public function delete($id)
    {
        $dt = $this->user_m->get($id)->row();
        $ktp = './uploads/berkas/profil/' . $dt->ktp;
        $foto = './uploads/berkas/profil/' . $dt->foto;
        $kartu_pers = './uploads/berkas/profil/' . $dt->kartu_pers;
        $npwp = './uploads/berkas/profil/' . $dt->npwp;
        if ($ktp) {
            unlink($ktp);
        }
        if ($foto) {
            unlink($foto);
        }
        if ($kartu_pers) {
            unlink($kartu_pers);
        }
        if ($npwp) {
            unlink($npwp);
        }
        $this->user_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
        redirect('user');
    }

    // public function confirm($id)
    // {
    //     $post = $this->user_m->get($id)->row();
    //     $this->user_m->confirm($post);
    //     if ($this->db->affected_rows() > 0) {
    //         $this->session->set_flashdata('success', 'Data Berhasil Diapprove');
    //     }
    //     redirect('user');
    // }
    public function confirm($id, $dt)
    {
        $post = $this->user_m->get($id)->row();
        $this->user_m->confirm($post, $dt);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Status Berhasil Diubah');
        }
        redirect('user');
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]');
            $this->form_validation->set_rules('passconf', 'Confirm Password', 'matches[password]', array('matches' => ' %s Tidak sesuai'));
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]', array('matches' => ' %s Tidak sesuai'));
        }
        // $this->form_validation->set_rules('address', 'Address');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '%s ini sudah terpakai');

        // set text error jadi merah
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/v_user_form_edit', $data);
            } else {
                echo "<script> alert('Data tidak ditemukan'); </script>";
                echo "<script> window.location = '" . site_url('user') . "'</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
            }
            redirect('user');
        }
    }

    public function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '%s ini sudah dipakai');
            return false;
        }
        return true;
    }
}
