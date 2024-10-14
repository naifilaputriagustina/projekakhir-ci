<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function pendaftaran() {


        $this->load->model('pendaftar_model');
        $data['pendaftar'] = $this->pendaftar_model->getevent();
        $this->load->view('templete/footer');
        $this->load->view('pendaftaran', $data);
        $this->load->view('templete/menu');
        $this->load->view('templete/header');
    }
    public function index() {
        // $this->load->view('templates/admin_header');
        
        $this->load->view('templete/footer');
        $this->load->view('admin');
        $this->load->view('templete/menu');
        $this->load->view('templete/header');
    }

    public function event() {
        $this->load->view('templete/footer');
        $this->load->view('event');
        $this->load->view('templete/menu');
        $this->load->view('templete/header');
    }

}