<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
        $this->load->model('m_kategori');


    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Barang',
            'barang' => $this->m_barang->get_user_data(),
            'isi' => 'barang/v_barang',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }

    // Add a new item
    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama_brg',
            'Nama Brg',
            'required',
            array('required' => '%s Nama Barang Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori',
            'required',
            array('required' => '%s Kategori Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'berat',
            'Berat',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        if ($this->form_validation->run() == TRUE or FALSE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size'] = '2000'; //'2000' = '2MB'
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Barang',
                    'tambah' => $this->m_barang->get_user_data(),
                    'kategori' => $this->m_kategori->get_user_data(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'barang/v_tambah',
                );
                $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_brg' => $this->input->post('nama_brg'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'harga' => $this->input->post('harga'),
                    'berat' => $this->input->post('berat'),
                    'stok' => $this->input->post('stok'),
                    'keterangan' => $this->input->post('keterangan'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->tambah($data);
                $this->session->set_flashdata('pesan', 'Barang Berhasil ditambahkan');
                redirect('barang');
            }
        }



        $data = array(
            'title' => 'Tambah Barang',
            'tambah' => $this->m_barang->get_user_data(),
            'kategori' => $this->m_kategori->get_user_data(),
            'isi' => 'barang/v_tambah',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }

    //Update one item
    public function edit($id_brg = NULL)
    {
        $this->form_validation->set_rules(
            'nama_brg',
            'Nama Brg',
            'required',
            array('required' => '%s Nama Barang Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'id_kategori',
            'Kategori',
            'required',
            array('required' => '%s Kategori Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'harga',
            'Harga',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'berat',
            'Berat',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        if ($this->form_validation->run() == TRUE or FALSE) {
            $config['upload_path'] = './assets/gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size'] = '2000'; //'2000' = '2MB'
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit Barang',
                    'edit' => $this->m_barang->get_user_data(),
                    'kategori' => $this->m_kategori->get_user_data(),
                    'barang' => $this->m_barang->get_data($id_brg),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'barang/v_tambah',
                );
                $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
            } else {
                //hapus gambar diganti gambar baru
                $barang = $this->m_barang->get_data($id_brg);
                if ($barang->gambar != "") {
                    unlink('./assets/gambar/' . $barang->gambar);
                }
                //hapus gambar diganti gambar baru
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_brg' => $id_brg,
                    'nama_brg' => $this->input->post('nama_brg'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'harga' => $this->input->post('harga'),
                    'berat' => $this->input->post('berat'),
                    'stok' => $this->input->post('stok'),
                    'keterangan' => $this->input->post('keterangan'),
                    'gambar' => $upload_data['uploads']['file_name'],
                );
                $this->m_barang->edit($data);
                $this->session->set_flashdata('pesan', 'Barang Berhasil diedit');
                redirect('barang');
            }
            //jika tidak ganti gambar
            $data = array(
                'id_brg' => $id_brg,
                'nama_brg' => $this->input->post('nama_brg'),
                'id_kategori' => $this->input->post('id_kategori'),
                'harga' => $this->input->post('harga'),
                'berat' => $this->input->post('berat'),
                'stok' => $this->input->post('stok'),
                'keterangan' => $this->input->post('keterangan'),
            );
            $this->m_barang->edit($data);
            $this->session->set_flashdata('pesan', 'Barang Berhasil diedit');
            redirect('barang');
        }



        $data = array(
            'title' => 'Edit Barang',
            //'tambah' => $this->m_barang->get_user_data(),
            'kategori' => $this->m_kategori->get_user_data(),
            'barang' => $this->m_barang->get_data($id_brg),
            'isi' => 'barang/v_edit',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }

    //Delete one item
    public function delete($id_brg = NULL)
    {
        //hapus gambar
        $barang = $this->m_barang->get_data($id_brg);
        if ($barang->gambar != "") {
            unlink('./assets/gambar/' . $barang->gambar);
        }
        //hapus gambar
        $data = array('id_brg' => $id_brg);
        $this->m_barang->delete($data);
        $this->session->set_flashdata('pesan', 'Produk Berhasil dihapus');
        redirect('barang');
    }
}

/* End of file Barang.php */

