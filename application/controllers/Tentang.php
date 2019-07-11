<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Tentang Kami - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('page/tentang', $data);
        $this->load->view('inc/footer');        
    }

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */
