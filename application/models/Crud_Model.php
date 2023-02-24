<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Model extends CI_Model
{
    public function inserir($dados)
    {
        if(isset($dados['id']) and $dados['id'] > 0):
            //noticia ja existe, devo editar
            $this->db->where('id', $dados['id']);
            unset($dados['id']);
            $this->db->update('avisos', $dados);
            return $this->db->affected_rows();
        else:
            //noticia não existe, devo inserir
            $this->db->insert('avisos', $dados);
            return $this->db->insert_id();
        endif;
    }

    public function get($offset=0){
        $this->db->order_by('id','desc');
        $query = $this->db->get('avisos'); 
        if($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
    }

    public function get_single($id=0)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('avisos');
        if($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
   }

    public function filtrar_valor($permission, $title = null, $type = null, ){
      //$this->db->like('titulo', $title);
      //$this->db->like('tipo_aviso', $type);
        $this->db->like('nivel_acesso', $permission);
        $query = $this->db->get('avisos');
        if($query->num_rows() > 0):
            return $query->result();
        else:
            return NULL;
        endif;
        
    }

   
}