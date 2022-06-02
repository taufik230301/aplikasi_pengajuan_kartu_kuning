<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Public extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_loker');
	}

	public function index()
	{
		$data['loker'] = $this->m_loker->get_all_loker()->result_array();
		
		$this->load->view('public', $data);
	}

}
