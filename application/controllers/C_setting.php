<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_setting");
    }

    public function index()
    {

        $data = array(
            'setting' => $this->m_setting->get_user_data(),
        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}



/* End of file C_setting.php */
