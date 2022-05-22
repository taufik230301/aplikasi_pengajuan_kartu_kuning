<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin/dashboard');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
    }
    
    public function view_perusahaan()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('perusahaan/dashboard');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_perusahaan');

		}

    }
    
    public function view_user()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
		$this->load->view('user/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/login_user');

		}
	}

}
