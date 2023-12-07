<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function get_user_data()
    {
        $this->db->select("*");
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');

        $this->db->order_by('id_brg', 'decs');
        return $this->db->get()->result();
    }
    public function get_user_data_kategori()
    {
        $this->db->select("*");
        $this->db->from('tb_kategori');
        $this->db->order_by('id_kategori', 'decs');
        return $this->db->get()->result();
    }
    public function detail_brg($id_brg)
    {
        $this->db->select("*");
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');
        $this->db->where('id_brg', $id_brg);
        return $this->db->get()->row();
    }
    public function gambar_barang($id_brg)
    {
        $this->db->select('*');
        $this->db->from('tb_gambar');
        $this->db->where('id_brg', $id_brg);
        return $this->db->get()->result();
    }

    public function kategori($id_kategori)
    {
        $this->db->select("*");
        $this->db->from('tb_kategori');
        $this->db->where('id_kategori', $id_kategori);

        return $this->db->get()->row();
    }
    public function get_user_data_brg($id_kategori)
    {
        $this->db->select("*");
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori', 'left');

        $this->db->where('tb_barang.id_kategori', $id_kategori);

        return $this->db->get()->result();
    }





}

/* End of file M_home.php */
