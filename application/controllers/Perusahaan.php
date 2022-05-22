<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_status_aktif');
        $this->load->model('m_status_perpanjangan');
        $this->load->model('m_status_verifikasi');
    }

    
    public function view_admin()
	{
        $data['perusahaan'] = $this->m_user->get_all_perusahaan()->result_array();
        $data['status_verifikasi_data'] = $this->m_status_verifikasi->get_all_status_verifikasi()->result_array();
        $data['status_aktif_data'] = $this->m_status_aktif->get_all_status_aktif()->result_array();
        $data['status_perpanjangan_data'] = $this->m_status_perpanjangan->get_all_status_perpanjangan()->result_array();
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

    public function verifikasi_data()
    {
      $id_user = $this->input->post("id_user");
      $status_verifikasi = $this->input->post("status_verifikasi");
      $pesan = $this->input->post("pesan");
      $email = $this->input->post("email");

      $this->load->library('email');
      $this->load->config('email');

          
      $from = $this->config->item('smtp_user');
      
      $subject = 'Status Verifikasi Kartu Kuning';
      

      $this->email->set_newline("\r\n");
      $this->email->from($from);
      $this->email->to($email);
      $this->email->subject($subject);
      $this->email->message($pesan);

      if ($this->email->send()) {
        $hasil = $this->m_status_verifikasi->update_status_verifikasi_perusahaan($status_verifikasi, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_verifikasi','eror_status_verifikasi');
                  redirect('Perusahaan/view_admin');
        }else{
          $this->session->set_flashdata('input_status_verifikasi','input_status_verifikasi');
          redirect('Perusahaan/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('Perusahaan/view_admin');
      }

    }

    public function aktif_data()
    {
      $id_user = $this->input->post("id_user");
      $status_aktif = $this->input->post("status_aktif");
     
      $pesan = $this->input->post("pesan");
      $email = $this->input->post("email");

      $this->load->library('email');
      $this->load->config('email');

          
      $from = $this->config->item('smtp_user');
      
      $subject = 'Status Verifikasi Kartu Kuning';
      

      $this->email->set_newline("\r\n");
      $this->email->from($from);
      $this->email->to($email);
      $this->email->subject($subject);
      $this->email->message($pesan);

      if ($this->email->send()) {
        $hasil = $this->m_status_aktif->update_status_aktif_perusahaan($status_aktif, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_aktif','eror_status_aktif');
                  redirect('Perusahaan/view_admin');
        }else{
          $this->session->set_flashdata('input_status_aktif','input_status_aktif');
          redirect('Perusahaan/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('Perusahaan/view_admin');
      }

    }

    

}