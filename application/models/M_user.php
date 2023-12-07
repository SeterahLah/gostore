<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get_user_data()
    {
        $this->db->select("*");
        $this->db->from('tb_user');
        $this->db->order_by('id', 'decs');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_user', $data);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->like('nama', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('password', $keyword);
        $this->db->or_like('level_user', $keyword);
        return $this->db->get()->result();
    }


    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tb_user');
    }

}

/* End of file M_user.php */
