<?php defined('BASEPATH') OR exit('No direct script access allowed');


class MidiasControl extends CI_Controller{
 
    /* FORM INSERT */
    function insertForm(){
    authorization();
    $this->load->templateUser('midias/insertForm');
 
    }

    /* FORM UPDATE */ 
    function updateForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);    
    $this->load->templateUser('midias/update_form',$dados);
    }

    /* FORM DELETE */
    function deleteForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('midias/delete_form',$dados);
    }


    /* CREATE */
    function insert(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'titulo', 'titulo', 'trim|required|min_length[4]'
    );
    $this->form_validation->set_rules(
        'descricao','descricao', 'trim|required|min_length[5]'
    );
    $this->form_validation->set_rules(
        'url','url', 'trim|required|min_length[5]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('midias/insertForm');

            
    }else{
        
    date_default_timezone_set('America/Fortaleza');   
         $registro=array(
            'title'=> $this->input->post('titulo'),
            'description'=> $this->input->post('descricao'),
            'data'=> $this->input->post('url'),
        );

    $this->load->model('midias_model');
    $this->midias_model->insert($registro);
    
     
   
        /* callback */
   $this->load->model('midias_model');
   $dados= $this->midias_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('midias/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function Dashboard(){
    
   $this->load->model('midias_model');
   $dados= $this->midias_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('midias/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
    
    }

   /*  UPDATE */

   function update(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'titulo', 'titulo', 'trim|required|min_length[4]'
    );
    $this->form_validation->set_rules(
        'descricao','descricao', 'trim|required|min_length[5]'
    );
    $this->form_validation->set_rules(
        'url','url', 'trim|required|min_length[5]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){    
    //houve um bug com a library form, razão de reenviar os $dados     
    $dados=array(
        'id'=>$this->input->post('id'),
        'title'=>$this->input->post('titulo'),
        'description'=>$this->input->post('descricao'),
        'data'=>$this->input->post('url')
    );
    $dados=array('dados'=>$dados);
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('midias/update_form',$dados);
            
    }else{

     
    $id=$this->input->post('id');
    $info=array(
    'id'=>$this->input->post('id'),
    'title'=>$this->input->post('titulo'),
    'description'=> $this->input->post('descricao'),
    'data'=> $this->input->post('url'),
    );

    $this->load->model('midias_model');
    $this->midias_model->update($id,$info);
   

    $this->load->model('midias_model');
    $dados= $this->midias_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('success', "<center><p class='text-success'>ATUALIZAÇÃO REALIZADA!</center>");

     $this->load->view('midias/dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');
    }

   }


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('midias_model');
    $this->midias_model->delete($id);
    

    $this->load->model('midias_model');
    $dados= $this->midias_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('midias/Dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}