<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select("*");
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');

        $this->db->order_by('id_brg', 'decs');
        return $this->db->get()->result();
    }
    public function get_data($id_brg)
    {
        $this->db->select("*");
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');
        $this->db->where('id_brg', $id_brg);
        return $this->db->get()->row();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_barang', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_brg', $data['id_brg']);
        $this->db->update('tb_barang', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_brg', $data['id_brg']);
        $this->db->delete('tb_barang');
    }


}

/* End of file M_barang.php */
