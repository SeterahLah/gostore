<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Gambarbarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gambarbarang');
        $this->load->model('m_barang');
    }

    public function index()
    {
        $data = array(
            'title' => 'Gambar Barang',
            'gambarbarang' => $this->m_gambarbarang->get_user_data(),
            'isi' => 'gambarbarang/v_index',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }
    public function tambah($id_brg)
    {
        $this->form_validation->set_rules(
            'ket',
            'Ket Gambar',
            'required',
            array('required' => '%s keterangan Harus diisi !!')
        );

        if ($this->form_validation->run() == TRUE or FALSE) {
            $config['upload_path'] = './assets/gambarbarang/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size'] = '2000'; //'2000' = '2MB'
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah gambar',
                    'tambah' => $this->m_barang->get_user_data(),
                    'error_upload' => $this->upload->display_errors(),
                    'gambar' => $this->m_gambarbarang->get_gambar($id_brg),
                    'isi' => 'gambarbarang/v_tambah',
                    'barang' => $this->m_barang->get_data($id_brg),
                );
                $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambarbarang/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_brg' => $id_brg,
                    'ket' => $this->input->post('ket'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_gambarbarang->tambah($data);
                $this->session->set_flashdata('pesan', 'Gambar Berhasil ditambahkan');
                redirect('gambarbarang/tambah/' . $id_brg);
            }
        }

        $data = array(
            'title' => 'tambah gambar',
            'gambar' => $this->m_gambarbarang->get_gambar($id_brg),
            'isi' => 'gambarbarang/v_tambah',
            'barang' => $this->m_barang->get_data($id_brg),
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }
    public function delete($id_brg, $id_gambar)
    {
        //hapus gambar
        $gambar = $this->m_gambarbarang->get_data($id_gambar);
        if ($gambar->gambar != "") {
            unlink('./assets/gambarbarang/' . $gambar->gambar);
        }
        //hapus gambar
        $data = array('id_gambar' => $id_gambar);
        $this->m_gambarbarang->delete($data);
        $this->session->set_flashdata('pesan', 'gambar Berhasil dihapus');
        redirect('gambarbarang/tambah/' . $id_brg);
    }

}
