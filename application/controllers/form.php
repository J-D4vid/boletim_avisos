<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Crud_model', 'crud');
        
        

    }


    public function criar()
    {
        
        $this->load->view('form');
        $form_data = $this->input->post();

        if($form_data != null):
            $id = $this->crud->inserir($form_data);
            redirect('pagina/avisos/'. $_SESSION['user_permission']);
        endif;
        
        
    }

    

}