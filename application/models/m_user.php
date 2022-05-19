<?php

class M_user extends CI_Model
{

    public function pendaftaran_user($id, $username, $email, $password,  $id_user_level, $id_status_verifikasi, $id_status_aktif, $id_status_perpanjangan)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi, id_status_aktif, id_status_perpanjangan, date_registered) VALUES ('$id','$id_status_verifikasi','$id_status_aktif','$id_status_perpanjangan', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function pendaftaran_perusahaan($id, $username, $email, $password,  $id_user_level, $id_status_verifikasi, $id_status_aktif)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user, username, password, email ,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO perusahaan_detail(id_perusahaan_detail, id_status_verifikasi, id_status_aktif, date_registered) VALUES ('$id','$id_status_verifikasi','$id_status_aktif', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username'");
        return $hasil;
        
    }

    public function update_account($id_user, $username, $password)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user SET username='$username', password='$password' WHERE id_user='$id_user'");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_user_detail($id_user, $no_pendaftaran, $nik, $nama_lengkap, 
    $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $status_perkawinan,
     $tinggi_badan, $berat_badan, 
    $pendidikan_terakhir, $jurusan, $pengalaman_kerja, $no_hp, $provinsi, $kota, 
    $kode_pos, $alamat, $foto_saya, $foto_ktp, $foto_ijazah)
    {

        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET no_pendaftaran='$no_pendaftaran', nik='$nik', nama_lengkap='$nama_lengkap', 
        tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', 
        status_perkawinan='$status_perkawinan', 
        tinggi_badan='$tinggi_badan', berat_badan='$berat_badan', pendidikan_terakhir='$pendidikan_terakhir', 
        jurusan='$jurusan', pengalaman_kerja='$pengalaman_kerja', no_hp='$no_hp', provinsi='$provinsi', kota='$kota',
         kode_pos='$kode_pos', alamat='$alamat', foto_saya='$foto_saya', foto_ktp='$foto_ktp', foto_ijazah='$foto_ijazah' 
         WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;

    }


}