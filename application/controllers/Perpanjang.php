<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpanjang extends CI_Controller {
    public function view_user()
	{
		$this->load->view('user/perpanjang');
    }
}