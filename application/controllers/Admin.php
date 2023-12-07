<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_pesanan_masuk');

    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'total_barang' => $this->m_admin->total_barang(),
            'total_user' => $this->m_admin->total_user(),
            'total_pesanan' => $this->m_admin->total_pesanan(),
            'total_kategori' => $this->m_admin->total_kategori(),
            'isi' => 'v_admin',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }
    public function setting()
    {
        $this->form_validation->set_rules(
            'nama_toko',
            'Nama_toko',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'lokasi',
            'Lokasi',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        $this->form_validation->set_rules(
            'alamat_toko',
            'Alamat toko',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'telepon',
            'Telepon',
            'required',
            array('required' => '%s Keterangan Harus diisi !!')
        );

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'setting',
                'setting' => $this->m_admin->data_setting(),
                'isi' => 'v_setting',
            );
            $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
        } else {
            $data = array(
                'id' => 1,
                'lokasi' => $this->input->post('lokasi'),
                'nama_toko' => $this->input->post('nama_toko'),
                'alamat_toko' => $this->input->post('alamat_toko'),
                'telepon' => $this->input->post('telepon'),
            );
            $this->m_admin->edit($data);
            $this->session->set_flashdata('pesan', 'ubah data lokasi Berhasil diupdate');
            redirect('admin/setting');
        }

    }

    public function pesanan_masuk()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'pesanan' => $this->m_pesanan_masuk->pesanan(),
            'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
            'pesanan_dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
            'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
            'isi' => 'v_pesanan_masuk',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data, FALSE);
    }

    public function proses($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'status_order' => '1'

        );
        $this->m_pesanan_masuk->proses($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil DiProses/Kemas ');
        redirect('admin/pesanan_masuk');
    }
    public function kirim($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'no_resi' => $this->input->post('no_resi'),
            'status_order' => '2'

        );
        $this->m_pesanan_masuk->proses($data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Dikirim ');
        redirect('admin/pesanan_masuk');
    }

}

/* End of file Admin.php */