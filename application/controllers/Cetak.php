<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cetak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_user');  
    }

    public function kartu_kuning($id_user){

        $data['pegawai'] = $this->m_user->get_user_detail_by_id($id_user)->result_array();
        // echo var_dump($data);
        // die();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "kartu_kuning.pdf";
        $this->pdf->load_view('kartu_kuning_pdf', $data);
    
    
    }

}