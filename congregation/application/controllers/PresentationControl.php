<?php defined('BASEPATH') OR exit('No direct script access allowed');


class PresentationControl extends CI_Controller{
  
    /* FORM INSERT */
    function insertForm(){
    authorization();
    $this->load->templateUser('presentation/insertForm');
 
    }

    /* FORM UPDATE */ 
    function updateForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);    
    $this->load->templateUser('presentation/update_form',$dados);
    }

    /* FORM DELETE */
    function deleteForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('presentation/delete_form',$dados);
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
    
    $success= $this->form_validation->run();

    if(!$success){
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('presentation/insertForm');

            
    }else{
        
    date_default_timezone_set('America/Fortaleza');   
    $this->load->helper('date');
        $registro=array(
            'title'=> $this->input->post('titulo'),
            'description'=> $this->input->post('descricao'),
            'data'=> date('d/m/Y \à\s H:i:s'),
        );

    $this->load->model('presentation_model');
    $this->presentation_model->insert($registro);
    
     
   
        /* callback */
   $this->load->model('presentation_model');
   $dados= $this->presentation_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('presentation/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function Dashboard(){
    
   $this->load->model('presentation_model');
   $dados= $this->presentation_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('presentation/dashboard',$dados);
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
    
    $success= $this->form_validation->run();

    if(!$success){    
    //houve um bug com a library form, razão de reenviar os $dados     
    $dados=array(
        'id'=>$this->input->post('id'),
        'title'=>$this->input->post('titulo'),
        'description'=>$this->input->post('descricao')
    );
    $dados=array('dados'=>$dados);
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('presentation/update_form',$dados);
            
    }else{

    date_default_timezone_set('America/Fortaleza');   
    $id=$this->input->post('id');
    $info=array(
    'id'=>$this->input->post('id'),
    'title'=>$this->input->post('titulo'),
    'description'=> $this->input->post('descricao'),
    'data'=> date('d/m/Y \à\s H:i:s'),
    );

    $this->load->model('presentation_model');
    $this->presentation_model->update($id,$info);
   

    $this->load->model('presentation_model');
    $dados= $this->presentation_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('success', "<center><p class='text-success'>ATUALIZAÇÃO REALIZADA!</center>");

     $this->load->view('presentation/dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');
    }

   }


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('presentation_model');
    $this->presentation_model->delete($id);
    

    $this->load->model('presentation_model');
    $dados= $this->presentation_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('presentation/Dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}