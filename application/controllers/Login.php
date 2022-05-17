<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function login_user()
	{
		$this->load->view('login_user');
	}

	public function login_perusahaan()
	{
		$this->load->view('login_perusahaan');
	}

}
