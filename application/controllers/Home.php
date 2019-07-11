<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'KKMproject';
        $this->load->view('inc/header', $data);
        $this->load->view('home', $data);
        $this->load->view('inc/footer');
    }
    
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
