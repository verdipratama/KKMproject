<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageNotFound extends CI_Controller {

    public function index()
    {
        $data['title'] = '404 - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('notfound');
        $this->load->view('inc/footer');
    }

}

/* End of file PageNotFound.php */
/* Location: ./application/controllers/PageNotFound.php */
