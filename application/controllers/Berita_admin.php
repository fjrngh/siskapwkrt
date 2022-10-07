<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin(); // role akses
        $this->load->model(['berita_m', 'user_m']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->berita_m->get();
        $this->template->load('template', 'berita_admin/v_berita_ad_data', $data);
    }

    public function add()
    {
        $berita = new stdClass();
        $berita->berita_id = null;
        $berita->user_id = $this->fungsi->user_login()->user_id;
        $berita->nama_media = null;
        $berita->jenis_media = null;
        $berita->url = null;
        $berita->rate_card = null;
        $berita->nama_perusahaan = null;
        $berita->akta_pendirian = null;
        $berita->sk_kemenkumham = null;
        $berita->npwp_perusahaan = null;
        $berita->siup = null;
        $berita->nib = null;
        $berita->sk_domisili = null;
        $berita->sk_pkp = null;
        $berita->referensi_bank = null;
        $berita->status = null;
        $berita->created_date = null;
        $data = array(
            'page' => 'add',
            'row' => $berita
        );

        $this->template->load('template', 'berita_admin/v_berita_ad_form_add', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        $config['upload_path']   = './uploads/berkas/media';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 5120;
        $config['file_name']     = 'MEDIA-' . $post['user_id'] . '-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);


        $this->load->library('upload', $config);

        if (isset($_POST['add'])) {
            if (@$_FILES['rate_card']['name'] != null || @$_FILES['akta_pendirian']['name'] != null || @$_FILES['sk_kemenkumham']['name'] != null || @$_FILES['npwp_perusahaan']['name'] != null || @$_FILES['siup']['name'] != null || @$_FILES['nib']['name'] != null || @$_FILES['sk_domisili']['name'] != null || @$_FILES['sk_pkp']['name'] != null || @$_FILES['referensi_bank']['name'] != null) {

                if ($this->upload->do_upload('rate_card')) {
                    $post['rate_card'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('akta_pendirian')) {
                    $post['akta_pendirian'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_kemenkumham')) {
                    $post['sk_kemenkumham'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('npwp_perusahaan')) {
                    $post['npwp_perusahaan'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('siup')) {
                    $post['siup'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('nib')) {
                    $post['nib'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_domisili')) {
                    $post['sk_domisili'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_pkp')) {
                    $post['sk_pkp'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('referensi_bank')) {
                    $post['referensi_bank'] = $this->upload->data('file_name');
                }

                $this->berita_m->add($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    redirect('berita');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('berita_admin/add');
                }
            } else {
                $post['rate_card'] = null;
                $post['akta_pendirian'] = null;
                $post['sk_kemenkumham'] = null;
                $post['npwp_perusahaan'] = null;
                $post['siup'] = null;
                $post['nib'] = null;
                $post['sk_domisili'] = null;
                $post['sk_pkp'] = null;
                $post['referensi_bank'] = null;
                $this->berita_m->add($post);
                // var_dump($this->profiluser_m->edit($post));
                // exit();
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                }
                redirect('berita');
            }
        } elseif (isset($_POST['edit'])) {
            if (@$_FILES['rate_card']['name'] != null || @$_FILES['akta_pendirian']['name'] != null || @$_FILES['sk_kemenkumham']['name'] != null || @$_FILES['npwp_perusahaan']['name'] != null || @$_FILES['siup']['name'] != null || @$_FILES['nib']['name'] != null || @$_FILES['sk_domisili']['name'] != null || @$_FILES['sk_pkp']['name'] != null || @$_FILES['referensi_bank']['name'] != null) {
                $item = $this->berita_m->get($post['id'])->row();
                // var_dump($item);
                // exit;

                if ($this->upload->do_upload('rate_card')) {
                    if ($item->rate_card != null) {
                        $target_file = './uploads/berkas/media/' . $item->rate_card;
                        unlink($target_file);
                    }
                    $post['rate_card'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('akta_pendirian')) {
                    if ($item->akta_pendirian != null) {
                        $target_file = './uploads/berkas/media/' . $item->akta_pendirian;
                        unlink($target_file);
                    }
                    $post['akta_pendirian'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_kemenkumham')) {
                    if ($item->sk_kemenkumham != null) {
                        $target_file = './uploads/berkas/media/' . $item->sk_kemenkumham;
                        unlink($target_file);
                    }
                    $post['sk_kemenkumham'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('npwp_perusahaan')) {
                    if ($item->npwp_perusahaan != null) {
                        $target_file = './uploads/berkas/media/' . $item->npwp_perusahaan;
                        unlink($target_file);
                    }
                    $post['npwp_perusahaan'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('siup')) {
                    if ($item->siup != null) {
                        $target_file = './uploads/berkas/media/' . $item->siup;
                        unlink($target_file);
                    }
                    $post['siup'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('nib')) {
                    if ($item->nib != null) {
                        $target_file = './uploads/berkas/media/' . $item->nib;
                        unlink($target_file);
                    }
                    $post['nib'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_domisili')) {
                    if ($item->sk_domisili != null) {
                        $target_file = './uploads/berkas/media/' . $item->sk_domisili;
                        unlink($target_file);
                    }
                    $post['sk_domisili'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('sk_pkp')) {
                    if ($item->sk_pkp != null) {
                        $target_file = './uploads/berkas/media/' . $item->sk_pkp;
                        unlink($target_file);
                    }
                    $post['sk_pkp'] = $this->upload->data('file_name');
                }
                if ($this->upload->do_upload('referensi_bank')) {
                    if ($item->referensi_bank != null) {
                        $target_file = './uploads/berkas/media/' . $item->referensi_bank;
                        unlink($target_file);
                    }
                    $post['referensi_bank'] = $this->upload->data('file_name');
                }

                $this->berita_m->edit($post);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                    redirect('berita_admin');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('berita_admin/edit');
                }
            } else {
                $post['rate_card'] = null;
                $post['akta_pendirian'] = null;
                $post['sk_kemenkumham'] = null;
                $post['npwp_perusahaan'] = null;
                $post['siup'] = null;
                $post['nib'] = null;
                $post['sk_domisili'] = null;
                $post['sk_pkp'] = null;
                $post['referensi_bank'] = null;
                $this->berita_m->edit($post);
                // var_dump($this->profiluser_m->edit($post));
                // exit();
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                }
                redirect('berita_admin');
            }
        }
    }

    public function delete($id)
    {
        $dt = $this->berita_m->get($id)->row();
        if ($dt->rate_card != null || $dt->akta_pendirian != null || $dt->sk_kemenkumham != null || $dt->npwp_perusahaan != null || $dt->siup != null || $dt->nib != null || $dt->sk_domisili != null || $dt->sk_pkp != null || $dt->referensi_bank != null) {
            // $target_file = array(
            $aa = './uploads/berkas/media/' . $dt->rate_card;
            $a = './uploads/berkas/media/' . $dt->akta_pendirian;
            $b = './uploads/berkas/media/' . $dt->sk_kemenkumham;
            $c = './uploads/berkas/media/' . $dt->npwp_perusahaan;
            $d = './uploads/berkas/media/' . $dt->siup;
            $e = './uploads/berkas/media/' . $dt->nib;
            $f = './uploads/berkas/media/' . $dt->sk_domisili;
            $g = './uploads/berkas/media/' . $dt->sk_pkp;
            $h = './uploads/berkas/media/' . $dt->referensi_bank;
            if ($aa) {
                unlink($aa);
            }
            if ($a) {
                unlink($a);
            }
            if ($b) {
                unlink($b);
            }
            if ($c) {
                unlink($c);
            }
            if ($d) {
                unlink($d);
            }
            if ($e) {
                unlink($e);
            }
            if ($f) {
                unlink($f);
            }
            if ($g) {
                unlink($g);
            }
            if ($h) {
                unlink($h);
            }
        }
        $this->berita_m->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        }
        redirect('berita_admin');
    }

    public function edit($id)
    {
        $query = $this->berita_m->get($id);
        if ($query->num_rows() > 0) {
            $data['row'] = $query->row();
            $this->template->load('template', 'berita_admin/v_berita_ad_form_edit', $data);
        } else {
            echo "<script> alert('Data tidak ditemukan'); </script>";
            echo "<script> window.location = '" . site_url('berita') . "'</script>";
        }
    }

    public function view($id)
    {
        $data['row'] = $this->berita_m->get($id);
        $this->template->load('template', 'berita_admin/v_berita_ad_data_view', $data);
    }

    public function confirm($id, $dt)
    {
        $post = $this->berita_m->get($id)->row();
        // var_dump($post);
        // exit;
        $this->berita_m->confirm($post, $dt);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Status Berhasil Diubah');
        }
        redirect('berita_admin');
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
