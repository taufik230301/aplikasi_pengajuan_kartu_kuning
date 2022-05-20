<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_loker');
    }

    
    public function view_perusahaan($id_user)
	{
        $data['loker'] = $this->m_loker->get_all_loker($id_user)->result_array();
		$this->load->view('perusahaan/loker', $data);
    }

    public function tambah_loker()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $posisi = $this->input->post('posisi');
        $jumlah_rekrut = $this->input->post('jumlah_rekrut');
        $salary = $this->input->post('salary');
        $batas_akhir = $this->input->post('batas_akhir');
        $id = md5($judul.$deskripsi.$posisi);
        $id_user = $this->session->userdata('id_user');

        $hasil = $this->m_loker->insert_loker($id, $id_user, $judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir);

			if($hasil==false){
                $this->session->set_flashdata('eror','eror');
                redirect('Loker/view_perusahaan/'.$id_user);
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Loker/view_perusahaan/'.$id_user);
			}
    }

    public function update_loker()
    {
        
    }

    public function hapus_loker()
    {
        
    }

    
    
   

}
