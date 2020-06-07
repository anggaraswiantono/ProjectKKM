<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KKM extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('galery_kkm');
        $this->load->view('templates/footer');
    }
}