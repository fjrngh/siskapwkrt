<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_admin_m extends CI_Model
{
    public $rate_card;
    public $akta_pendirian;
    public $sk_kemenkumham;
    public $npwp_perusahaan;
    public $siup;
    public $nib;
    public $sk_domisili;
    public $sk_pkp;
    public $referensi_bank;

    public function get($id = null)
    {
        $this->db->from('t_berita');
        if ($id != null) {
            $this->db->where('berita_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        $this->db->where('berita_id', $id);
        $this->db->delete('t_berita');
    }

    public function add($post)
    {
        $params = [
            'user_id' => $post['user_id'],
            'nama_media' => $post['nama_media'],
            'jenis_media' => $post['jenis_media'],
            'url' => $post['link_media'],
            'nama_perusahaan' => $post['nama_perusahaan'],
            'rate_card' => empty($post['rate_card']) ? null : $post['rate_card'],
            'akta_pendirian' => empty($post['akta_pendirian']) ? null : $post['akta_pendirian'],
            'sk_kemenkumham' => empty($post['sk_kemenkumham']) ? null : $post['sk_kemenkumham'],
            'npwp_perusahaan' => empty($post['npwp_perusahaan']) ? null : $post['npwp_perusahaan'],
            'siup' => empty($post['siup']) ? null : $post['siup'],
            'nib' => empty($post['nib']) ? null : $post['nib'],
            'sk_domisili' => empty($post['sk_domisili']) ? null : $post['sk_domisili'],
            'sk_pkp' => empty($post['sk_pkp']) ? null : $post['sk_pkp'],
            'referensi_bank' => empty($post['referensi_bank']) ? null : $post['referensi_bank'],
            'status' => null,
            'created_date' => date('Y-m-d H:i:s'),
        ];

        $this->db->insert('t_berita', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_media' => $post['nama_media'],
            'jenis_media' => $post['jenis_media'],
            'url' => $post['link_media'],
            'nama_perusahaan' => $post['nama_perusahaan'],
            'created_date' => date('Y-m-d H:i:s'),
        ];

        if (isset($post['rate_card']) != null) {
            $params['rate_card'] = $post['rate_card'];
        }
        if (isset($post['akta_pendirian']) != null) {
            $params['akta_pendirian'] = $post['akta_pendirian'];
        }
        if (isset($post['sk_kemenkumham']) != null) {
            $params['sk_kemenkumham'] = $post['sk_kemenkumham'];
        }
        if (isset($post['npwp_perusahaan']) != null) {
            $params['npwp_perusahaan'] = $post['npwp_perusahaan'];
        }
        if (isset($post['siup']) != null) {
            $params['siup'] = $post['siup'];
        }
        if (isset($post['nib']) != null) {
            $params['nib'] = $post['nib'];
        }
        if (isset($post['sk_domisili']) != null) {
            $params['sk_domisili'] = $post['sk_domisili'];
        }
        if (isset($post['sk_pkp']) != null) {
            $params['sk_pkp'] = $post['sk_pkp'];
        }
        if (isset($post['referensi_bank']) != null) {
            $params['referensi_bank'] = $post['referensi_bank'];
        }

        $this->db->where('berita_id', $post['id']);
        $this->db->update('t_berita', $params);
    }

    public function confirm($post, $dt)
    {
        // var_dump($dt);
        // exit;
        $post->status = $dt;
        $data = array(
            'status' => $post->status,
        );
        $this->db->where('berita_id', $post->berita_id);
        $this->db->update('t_berita', $data);
    }
}
