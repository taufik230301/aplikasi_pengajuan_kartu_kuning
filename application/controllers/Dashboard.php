<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('user/dashboard');
	}

}
