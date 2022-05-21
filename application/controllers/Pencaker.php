<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker extends CI_Controller {

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
    
    $data['user'] = $this->m_user->get_all_user()->result_array();
    $data['status_verifikasi_data'] = $this->m_status_verifikasi->get_all_status_verifikasi()->result_array();
    $data['status_aktif_data'] = $this->m_status_aktif->get_all_status_aktif()->result_array();
    $data['status_perpanjangan_data'] = $this->m_status_perpanjangan->get_all_status_perpanjangan()->result_array();
    
		$this->load->view('admin/pencaker', $data);
    }

    public function view_perusahaan()
	  {
    $data['user'] = $this->m_user->get_all_user()->result_array();
		$this->load->view('perusahaan/pencaker', $data);
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
        $hasil = $this->m_user->update_status_verifikasi_user($status_verifikasi, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_verifikasi','eror_status_verifikasi');
                  redirect('Pencaker/view_admin');
        }else{
          $this->session->set_flashdata('input_status_verifikasi','input_status_verifikasi');
          redirect('Pencaker/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('Pencaker/view_admin');
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
        $hasil = $this->m_status_aktif->update_status_aktif_user($status_aktif, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_aktif','eror_status_aktif');
                  redirect('Pencaker/view_admin');
        }else{
          $this->session->set_flashdata('input_status_aktif','input_status_aktif');
          redirect('Pencaker/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('Pencaker/view_admin');
      }

    }

    public function ubah_status_perpanjangan()
    {
      $id_user = $this->input->post("id_user");
      $status_perpanjangan = $this->input->post("status_perpanjangan");
     
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
        $hasil = $this->m_status_perpanjangan->update_status_perpanjangan_user($status_perpanjangan, $id_user);

        if($hasil==false){
                  $this->session->set_flashdata('eror_status_perpanjangan','eror_status_perpanjangan');
                  redirect('Pencaker/view_admin');
        }else{
          $this->session->set_flashdata('input_status_perpanjangan','input_status_perpanjangan');
          redirect('Pencaker/view_admin');
        }
      } else {
        $this->session->set_flashdata('error_send','error_send');
        redirect('Pencaker/view_admin');
      }

    }
    

    
    
   

}