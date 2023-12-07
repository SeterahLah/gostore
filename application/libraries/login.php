<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }



    public function login($email, $password)
    {
        $cek = $this->ci->m_auth->login($email, $password);
        if ($cek) {
            $nama_pelanggan = $cek->nama_pelanggan;
            $email = $cek->email;
            $password = $cek->password;
            $foto = $cek->foto;
            $id_pelanggan = $cek->id_pelanggan;


            //buat session

            $this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
            $this->ci->session->set_userdata('nama_pelanggan', $nama_pelanggan);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('password', $password);
            $this->ci->session->set_userdata('foto', $foto);

            redirect('home');

        } else {
            //jika salah
            $this->ci->session->set_flashdata('error', 'Email atau password yang anda masukkan salah!');
            redirect('registrasi/login');
        }

    }
    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('nama_pelanggan') == '') {
            $this->ci->session->set_flashdata('error', 'anda belum login');
            redirect('registrasi/login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('id_pelanggan');
        $this->ci->session->unset_userdata('nama_pelanggan');
        $this->ci->session->unset_userdata('foto');
        $this->ci->session->set_flashdata('pesan', 'anda berhasil Log Out');
        redirect('registrasi/login');
    }


}

/* End of file User_login.php */
