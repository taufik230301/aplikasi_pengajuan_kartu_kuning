<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/dashboard');
    }
    
    public function view_operator()
	{
		$this->load->view('operator/dashboard');
    }
    
    public function view_user()
	{
		$this->load->view('user/dashboard');
	}

}
