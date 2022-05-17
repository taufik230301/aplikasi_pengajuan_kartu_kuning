<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Public extends CI_Controller {

	public function index()
	{
		$this->load->view('public');
	}

}
