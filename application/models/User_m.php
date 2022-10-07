<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        // $this->db->where('status_user', 1);
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama'] = $post['nama_lengkap'];
        $params['no_telp'] = $post['no_telp'];
        $params['kabkota'] = $post['kabkota'];
        $params['provinsi'] = $post['provinsi'];
        $params['kodepos'] = $post['kodepos'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = 2;

        // var_dump($params);
        // exit;

        $this->db->insert('user', $params);
    }

    public function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }

    public function edit($post)
    {
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];

        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }
    public function confirm($post, $dt)
    {
        $post->status_user = $dt;
        $data = array(
            'status_user' => $post->status_user,
        );
        $this->db->where('user_id', $post->user_id);
        $this->db->update('user', $data);
    }
}
