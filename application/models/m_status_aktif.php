<?php

class M_status_aktif extends CI_Model
{

    public function get_all_status_aktif()
    {
        $hasil = $this->db->query("SELECT * FROM status_aktif");
        return $hasil;
    }


    public function update_status_aktif_user($status_aktif, $id_user)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE user_detail SET id_status_aktif='$status_aktif' WHERE id_user_detail='$id_user'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}


