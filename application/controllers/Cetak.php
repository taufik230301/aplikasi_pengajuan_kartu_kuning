<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {


    public function laporan_pdf(){

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            )
        );
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "kartu_kuning.pdf";
        $this->pdf->load_view('kartu_kuning_pdf', $data);
    
    
    }

}