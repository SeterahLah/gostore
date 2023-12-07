<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select("*");
        $this->db->from('tb_kategori');
        $this->db->order_by('id_kategori', 'decs');
        return $this->db->get()->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_kategori', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('tb_kategori', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->delete('tb_kategori');
    }


}

/* End of file M_kategori.php */
