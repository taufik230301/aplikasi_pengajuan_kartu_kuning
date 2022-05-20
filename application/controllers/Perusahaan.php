<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    
    public function view_admin()
	{
        $data['perusahaan'] = $this->m_user->get_all_perusahaan()->result_array();
		$this->load->view('admin/perusahaan', $data);
    }

    public function tambah_perusahaan()
    {

    }

    public function update_perusahaan()
    {
        
    }

    public function hapus_perusahaan()
    {
        
    }

    

}