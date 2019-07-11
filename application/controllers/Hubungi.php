<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hubungi extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Hubungi Kami - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('page/kontak', $data);
        $this->load->view('inc/footer');         
    }

}

/* End of file Hubungi.php */
/* Location: ./application/controllers/Hubungi.php */
