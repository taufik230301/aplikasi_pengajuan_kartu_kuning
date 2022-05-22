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
		$this->load->view('admin/dashboard');
    }
    
    public function view_perusahaan()
	{
		$this->load->view('perusahaan/dashboard');
    }
    
    public function view_user()
	{
		$data['user_data'] = $this->m_user->get_user_detail_by_id($this->session->userdata('id_user'))->row_array();
	
		$this->load->view('user/dashboard', $data);
	}

}
