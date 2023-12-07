<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_gambarbarang extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select('tb_barang.*,COUNT(tb_gambar.id_brg) as total_gambar');
        $this->db->from('tb_barang');
        $this->db->join('tb_gambar', 'tb_gambar.id_brg = tb_barang.id_brg', 'left');

        $this->db->group_by('tb_barang.id_brg');
        $this->db->order_by('tb_barang.id_brg', 'desc');


        return $this->db->get()->result();
    }
    public function get_data($id_gambar)
    {
        $this->db->select('*');
        $this->db->from('tb_gambar');
        $this->db->where('id_gambar', $id_gambar);
        return $this->db->get()->row();


    }
    public function get_gambar($id_brg)
    {
        $this->db->select('*');
        $this->db->from('tb_gambar');
        $this->db->where('id_brg', $id_brg);
        return $this->db->get()->result();
    }
    public function tambah($data)
    {
        $this->db->insert('tb_gambar', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_gambar', $data['id_gambar']);
        $this->db->delete('tb_gambar');
    }
}