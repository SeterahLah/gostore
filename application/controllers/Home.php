<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'barang' => $this->m_home->get_user_data(),
            'isi' => 'v_home',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


    public function kategori($id_kategori)
    {
        $this->login->proteksi_halaman();
        $kategori = $this->m_home->kategori($id_kategori);
        $data = array(
            'title' => 'Kategori Barang :' . $kategori->kategori,
            'barang' => $this->m_home->get_user_data_brg($id_kategori),
            'isi' => 'v_kategori_brg',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
    public function detail_brg($id_brg)
    {
        $data = array(
            'title' => 'Detail Produk',
            'gambar' => $this->m_home->gambar_barang($id_brg),
            'barang' => $this->m_home->detail_brg($id_brg),
            'isi' => 'v_detail_brg',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }


}

/* End of file Home.php */
