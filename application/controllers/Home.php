<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/home_header');
        $this->load->view('home/home');
        $this->load->view('templates/home_footer');
    }
}
