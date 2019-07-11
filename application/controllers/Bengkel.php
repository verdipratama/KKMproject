<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bengkel extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Bengkel Las Terumbu - Desa Terumbu';
        $this->load->view('inc/headlist', $data);
        $this->load->view('list/listing', $data);
        $this->load->view('inc/footer');
    }

    public function mitrasejahtera()
    {
        $data['title'] = 'Bengkel Las Mitra Sejahtera - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/01-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function griliatigaserangkai()
    {
        $data['title'] = 'Bengkel Las CV. Grilia Tiga Serangkai - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/02-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function berkahlogam()
    {
        $data['title'] = 'Bengkel Las Berkah Logam - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/03-bengkel', $data);
        $this->load->view('inc/footer');

    }

    public function sejahteratekniksteel()
    {
        $data['title'] = 'Bengkel Las Sejahtera Teknik Steel - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/04-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function jayasejahtera()
    {
        $data['title'] = 'Bengkel Las Jaya Sejahtera - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/05-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function harapanmaju()
    {
        $data['title'] = 'Bengkel Las Harapan Maju - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/06-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function nusajaya()
    {
        $data['title'] = 'Bengkel Las Nusa Jaya - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/07-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function shifalas()
    {
        $data['title'] = 'Bengkel Las Shifa Las - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/08-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function usahajayateknik()
    {
        $data['title'] = 'Bengkel Las Usaha Jaya Teknik - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/09-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function karyatunggalputra()
    {
        $data['title'] = 'Bengkel Las Karya Tunggal Putra - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/10-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function lantijayateknik()
    {
        $data['title'] = 'Bengkel Las Lanti Jaya Teknik - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/11-bengkel', $data);
        $this->load->view('inc/footer');
    }

    public function anugrahjayateknik()
    {
        $data['title'] = 'Bengkel Las Anugrah Jaya Teknik - Desa Terumbu';
        $this->load->view('inc/headpage', $data);
        $this->load->view('list/12-bengkel', $data);
        $this->load->view('inc/footer');
    }
}

/* End of file Bengkel.php */
/* Location: ./application/controllers/Bengkel.php */
