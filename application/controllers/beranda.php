<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('beranda');
        $this->load->view('template/footer');
    }
}