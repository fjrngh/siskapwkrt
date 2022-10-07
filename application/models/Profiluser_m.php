<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiluser_m extends CI_Model
{
    public function get($id = null)
    {
        // $this->db->from('user');
        // if ($id != null) {
        //     $this->db->where('user_id', $id);
        // }
        // $query = $this->db->get();
        // return $query;

        $this->db->select('user.*, provinces.name as nama_provinsi, regencies.name as nama_kabkota');
        $this->db->from('user');
        $this->db->join('provinces', 'provinces.id = user.provinsi');
        $this->db->join('regencies', 'regencies.id = user.kabkota');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        // $this->db->order_by('barcode', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params = [
            'username' => $post['username'],
            'nama' => $post['nama_lengkap'],
            'address' => $post['address'],
            'no_telp' => $post['no_telp'],
            'kabkota' => $post['kabkota'],
            'provinsi' => $post['provinsi'],
            'kodepos' => $post['kodepos'],
            'update' => date('Y-m-d H:i:s'),
        ];
        // penambahan kondisi params untuk edit gambar
        if ($post['ktp'] != null) {
            $params['ktp'] = $post['ktp'];
        }
        if ($post['foto'] != null) {
            $params['foto'] = $post['foto'];
        }
        if ($post['kartu_pers'] != null) {
            $params['kartu_pers'] = $post['kartu_pers'];
        }
        if ($post['npwp'] != null) {
            $params['npwp'] = $post['npwp'];
        }
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function check_profil($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function confirm($post)
    {
        $post->status_user = 3;
        // var_dump($post);
        // exit;
        $data = array(
            'status_user' => $post->status_user,
        );
        $this->db->where('user_id', $post->user_id);
        $this->db->update('user', $data);
    }
}
