<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kartu_Kuning extends CI_Controller {


    
    public function view_user()
	{
		$this->load->view('user/daftar_ak1');
    }


    public function lengkapi_data()
    {
        $nik = $this->input->post('nik');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jurusan = $this->input->post('jurusan');
        $pengalaman_kerja = $this->input->post('pengalaman_kerja');
        $no_hp = $this->input->post('no_hp');
        $provinsi = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');

        echo $nik;
        die();

        
    }
}
