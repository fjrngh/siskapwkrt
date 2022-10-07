<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    public function get_daycheckout()
    {
        $user = $this->session->userdata('userid');
        $this->db->select('COUNT(user_id) as checkout_user, SUM(sisa_dana) as omset_user');
        $this->db->from('t_stock');
        $this->db->where('user_id', $user);
        $query = $this->db->get();
        return $query;
    }
}
