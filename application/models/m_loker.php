<?php

class M_loker extends CI_Model
{
    
    public function get_all_loker_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT nama_perusahaan, judul, loker.deskripsi, posisi, jumlah_rekrut, salary, batas_akhir FROM loker JOIN perusahaan_detail ON loker.id_perusahaan = perusahaan_detail.id_perusahaan_detail WHERE id_perusahaan='$id_user'");
        return $hasil;
    }


    public function insert_loker($id_loker,$id_perusahaan ,$judul, $deskripsi, $posisi, $jumlah_rekrut, $salary, $batas_akhir)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO loker(id_loker, id_perusahaan, judul, deskripsi ,posisi, jumlah_rekrut, salary, batas_akhir, created_at) 
       VALUES ('$id_loker','$id_perusahaan','$judul','$deskripsi','$posisi','$jumlah_rekrut','$salary','$batas_akhir',NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}