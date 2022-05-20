<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('m_user');
  }
    
    public function view_admin()
	  {
    $data['user'] = $this->m_user->get_all_user()->result_array();
		$this->load->view('admin/pencaker', $data);
    }

    public function view_perusahaan()
	  {

    
		$this->load->view('perusahaan/pencaker');
    }

    public function tambah_pencaker()
    {

    }

    public function update_pencaker()
    {
        
    }

    public function hapus_pencaker()
    {
        
    }

    

    
    
   

}