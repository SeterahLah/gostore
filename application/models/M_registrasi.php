<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_registrasi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function tambah($data)
    {
        $this->db->insert('tb_pelanggan', $data);
    }
}

/* End of file M_registrasi.php */
