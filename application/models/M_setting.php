<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_setting extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select("*");
        $this->db->from('tb_setting');
        $this->db->order_by('id', 'decs');
        return $this->db->get()->result();
    }
}