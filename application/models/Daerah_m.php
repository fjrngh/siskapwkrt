<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerah_m extends CI_Model
{
    public function get_prov($id = null)
    {
        $this->db->from('provinces');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kabkota($id = null)
    {
        $this->db->from('regencies');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_kabkotanext($id)
    {
        $hasil = $this->db->query("SELECT * FROM regencies WHERE province_id='$id'");
        return $hasil->result();
        // $this->db->from('regencies');
        // $this->db->where('province_id', $id);
        // $query = $this->db->get();
        // return $query;
    }
}
