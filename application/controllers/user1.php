<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user1"); //memanggil model user yang sudah dibuat sebelumnya
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Edit User',
            //'user' => $this->m_user->get_user_data(),
            'user1' => $this->m_user1->get_user_data(),
        );
        $this->load->view('layout_admin/v_head_edit', $data);
        $this->load->view('layout_admin/v_header_backend', $data);
        $this->load->view('v_edit', $data);
        $this->load->view('layout_admin/v_footer_backend');

    }
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user1'] = $this->m_user1->edit($where, 'tb_user')->result();


        $this->load->view('layout_admin/v_head_edit');
        $this->load->view('layout_admin/v_header_backend');
        $this->load->view('layout_admin/v_nav_edit');
        $this->load->view('v_edit', $data);
        $this->load->view('layout_admin/v_footer_backend');
        $this->session->set_flashdata('pesan', 'User Berhasil diTambahkan');

    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level_user = $this->input->post('level_user');
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level_user' => $level_user
        );
        $where = array(
            'id' => $id
        );
        $this->m_user1->update($where, $data, 'tb_user');
        $this->session->set_flashdata('pesan', 'User Berhasil diedit');
        redirect('user');
    }
}

/* End of file User1.php */
