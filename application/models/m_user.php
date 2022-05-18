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


}