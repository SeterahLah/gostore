<?php


//ketik crud maka akan muncul functionnya
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user"); //memanggil model user yang sudah dibuat sebelumnya
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'User',
            //'user' => $this->m_user->get_user_data(),
            'user' => $this->m_user->get_user_data(),
            'isi' => 'v_user',
        );
        $this->load->view('layout_admin/v_wrapper_backend', $data);
    }

    // Add a new item
    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            // 'password' => $this->input->post('password'),
            'level_user' => $this->input->post('level_user'),
        );
        $this->db->set('id', 'UUID()', FALSE);
        $this->m_user->tambah($data);
        $this->session->set_flashdata('pesan', 'User Berhasil diTambahkan');
        redirect('user');
    }


    //Update one item
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->m_user->edit($where, 'tb_user')->result();


        $this->load->view('v_edit', $data);

    }


    //Delete one item
    public function delete($id = NULL)
    {
        $data = array('id' => $id);
        $this->m_user->delete($data);
        $this->session->set_flashdata('pesan', 'User Berhasil dihapus');
        redirect('user');
    }

}

/* End of file User.php */

