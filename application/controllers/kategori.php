<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');


    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'kategori',
            'kategori' => $this->m_kategori->get_user_data(),
            'isi' => 'v_kategori',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data);
    }

    // Add a new item
    public function tambah()
    {
        $data = array(
            'kategori' => $this->input->post('kategori'),
        );
        $this->m_kategori->tambah($data);
        $this->session->set_flashdata('pesan', 'Kategori Berhasil diTambahkan');
        redirect('kategori');
    }

    //Update one item
    public function edit($id_kategori = NULL)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'kategori' => $this->input->post('kategori'),
        );
        $this->m_kategori->edit($data);
        $this->session->set_flashdata('pesan', 'Kategori Berhasil diupdate');
        redirect('kategori');
    }

    //Delete one item
    public function delete($id_kategori = NULL)
    {
        $data = array('id_kategori' => $id_kategori);
        $this->m_kategori->delete($data);
        $this->session->set_flashdata('pesan', 'Kategori Berhasil dihapus');
        redirect('kategori');
    }
}

/* End of file Controllername.php */

