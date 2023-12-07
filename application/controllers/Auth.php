<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login_user()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array('required' => '%s Username Harus diisi !!')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => '%s Password Harus diisi !!')
        );

        if ($this->form_validation->run() == TRUE or FALSE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->db->get_where('tb_user', ['username' => $username]);

            if ($cek->num_rows() > 0) {
                // kita ambil isi dari record
                $hasil = $cek->row();
                if (password_verify($password, $hasil->password)) {

                    $this->session->set_userdata('username', $hasil->username);
                    $this->session->set_userdata('nama', $hasil->nama);
                    $this->session->set_userdata('level_user', $hasil->level_user);

                    redirect('admin');
                } else {
                    // jika password salah
                    $this->session->set_flashdata('error', 'Password salah !');
                    redirect('auth/login_user');
                }

            } else {
                $this->session->set_flashdata('error', 'Username tidak Tersedia !');
                redirect('user');
            }

            // $this->user_login->login($username, $password);
        }

        $data = array(
            'title' => 'Login User',

        );
        $this->load->view('v_login_user', $data, FALSE);
    }

    public function logout_user()
    {
        $this->user_login->logout();
    }





}

/* End of file Auth.php */
