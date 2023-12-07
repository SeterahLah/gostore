<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{

    public function all_data()
    {
        $this->db->select("*");
        $this->db->from('tb_pelanggan');
        $this->db->order_by('id_pelanggan', 'decs');
        return $this->db->get()->result();
    }
    public function tambah($data)
    {
        $this->db->insert('tb_pelanggan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pelanggan', $data['id_pelanggan']);
        $this->db->delete('tb_pelanggan');
    }
    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}

/* End of file M_pelanggan.php */
