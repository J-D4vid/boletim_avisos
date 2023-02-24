<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model', 'crud');

    }


    public function index()
    {
        $this->load->view('index');
    }

    public function c_entrada()
    {
        $this->load->view('entradas');
    }

    public function avisos()
    {

        $id = $this->uri->segment(3);
        if(isset($id)):
            $_SESSION['user_permission'] = $id;
            if($id == 0):
                $dados['permissao'] = 'Geral';

            else:
                if($id == 1):
                    $dados['permissao'] = 'Funcionário';

                else:
                    $dados['permissao'] = 'Gestão';
                endif;
            endif;
        endif;
        $dados['avisos'] = $this->crud->filtrar_valor($_SESSION['user_permission']);



        //carregando as views
        $this->load->view('entradas', $dados);
    }



}