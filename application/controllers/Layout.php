<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller
{
    public function header()
    {
        $this->load->view('layouts/header');
    }

    public function footer()
    {
        $this->load->view('layouts/footer');
    }

    public function footer()
    {
        $this->load->view('layouts/content');
    }
}



?>