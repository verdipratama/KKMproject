<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Profil Desa - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('page/profil', $data);
        $this->load->view('inc/footer');         
    }

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */
