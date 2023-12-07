<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
    }

    public function index()
    {

        $data = array(
            'title' => 'Pelanggan',
            'pelanggan' => $this->m_pelanggan->all_data(),
            //'total_kategori' => $this->m_pelanggan->total_kategori(),
            'isi' => 'v_pelanggan',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }
    public function akun()
    {
        $this->login->proteksi_halaman();
        $data = array(
            'title' => 'Akun Saya',
            //'pelanggan' => $this->m_pelanggan->total_barang(),
            //'total_kategori' => $this->m_pelanggan->total_kategori(),
            'isi' => 'v_akun',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }
    public function tambah()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'telepon' => $this->input->post('telepon'),
            'alamat' => $this->input->post('alamat'),
        );
        $this->m_pelanggan->tambah($data);
        $this->session->set_flashdata('pesan', 'User Berhasil diTambahkan');
        redirect('pelanggan');
    }
    public function delete($id_pelanggan = NULL)
    {
        $data = array('id_pelanggan' => $id_pelanggan);
        $this->m_pelanggan->delete($data);
        $this->session->set_flashdata('pesan', 'User Berhasil dihapus');
        redirect('pelanggan');
    }
    public function edit($id_pelanggan)
    {
        $where = array(
            'id_pelanggan' => $id_pelanggan
        );
        $data['pelanggan'] = $this->m_pelanggan->edit($where, 'tb_pelanggan')->result();


        $this->load->view('layout_admin/v_head_edit');
        $this->load->view('layout_admin/v_header_backend');
        $this->load->view('layout_admin/v_nav_edit');
        $this->load->view('v_edit_pelanggan', $data);
        $this->load->view('layout_admin/v_footer_backend');
        $this->session->set_flashdata('pesan', 'User Berhasil diTambahkan');

    }

    public function update()
    {
        $id_pelanggan = $this->input->post('id_pelanggan');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
        $foto = $this->input->post('foto');
        $data = array(
            'nama_pelanggan' => $nama_pelanggan,
            'email' => $email,
            'telepon' => $telepon,
            'alamat' => $alamat,
            'foto' => $foto

        );
        $where = array(
            'id_pelanggan' => $id_pelanggan
        );
        $this->m_pelanggan->update($where, $data, 'tb_pelanggan');
        $this->session->set_flashdata('pesan', 'User Berhasil diedit');
        redirect('pelanggan');
    }
}