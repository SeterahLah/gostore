<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model("m_belanja");
        $this->load->model("m_transaksi");
    }

    public function index()
    {
        $this->login->proteksi_halaman();
        if (empty($this->cart->contents())) {
            redirect('home');
        }
        $data = array(
            'title' => 'Keranjang Produk',

            'isi' => 'v_belanja',
        );
        $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
    }

    public function tambah()
    {
        $this->login->proteksi_halaman();
        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id' => $this->input->post('id'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('name'),
        );

        $this->cart->insert($data);
        redirect($redirect_page, 'refresh');
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('belanja');
    }
    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty' => $this->input->post($i . '[qty]'),
            );

            $this->cart->update($data);
            $i++;
        }
        $this->session->set_flashdata('pesan', 'Keranjang Pesanan Berhasil Di Update');
        redirect('belanja');

    }
    public function kosongkan()
    {
        $this->cart->destroy();
        redirect('belanja');
    }

    public function checkout()
    {
        $this->login->proteksi_halaman();

        $this->form_validation->set_rules(
            'provinsi',
            'Provinsi',
            'required',
            array('required' => '%s Provinsi Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'kota',
            'Kota',
            'required',
            array('required' => '%s Kota Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'ekpedisi',
            'Ekpedisi',
            'required',
            array('required' => '%s Jasa Kirim Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'paket',
            'Paket',
            'required',
            array('required' => '%s Paket Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'nama_penerima',
            'Nama penerima',
            'required',
            array('required' => '%s Nama Penerima Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'telepon',
            'Telepon',
            'required',
            array('required' => '%s telepon/No. handphone Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'kode_pos',
            'Kode pos',
            'required',
            array('required' => '%s Kode Pos Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            array('required' => '%s Alamat Harus diisi !!')
        );

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => 'Check Out Belanja',

                'isi' => 'v_checkout',
            );
            $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
        } else {
            $data = array(
                //untk simpan tb_transaksi
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'no_order' => $this->input->post('no_order'),
                'tgl_order' => date('Y-m-d'),
                'nama_penerima' => $this->input->post('nama_penerima'),
                'telepon' => $this->input->post('telepon'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'alamat' => $this->input->post('alamat'),
                'kode_pos' => $this->input->post('kode_pos'),
                'ekpedisi' => $this->input->post('ekpedisi'),
                'paket' => $this->input->post('paket'),
                'estimasi' => $this->input->post('estimasi'),
                'ongkir' => $this->input->post('ongkir'),
                'berat' => $this->input->post('berat'),
                'grand_total' => $this->input->post('grand_total'),
                'total_bayar' => $this->input->post('total_bayar'),
                'status_bayar' => '0',
                'status_order' => '0',

            );
            $this->m_transaksi->simpan_transaksi($data);
            //untk simpan tb_rincian_transaksi
            $i = 1;
            foreach ($this->cart->contents() as $items) {
                $data_rincian = array(
                    'no_order' => $this->input->post('no_order'),
                    'id_barang' => $items['id'],
                    'qty' => $this->input->post('qty' . $i++),
                );
                $this->m_transaksi->simpan_rinci_transaksi($data_rincian);
            }
            //untk /simpan tb_rincian_transaksi
            $this->session->set_flashdata('pesan', 'Pesanan sedang diproses');
            $this->cart->destroy();
            redirect('pesanan_saya');
        }
    }






}

/* End of file Belanja.php */
