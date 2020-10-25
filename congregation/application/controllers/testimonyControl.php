<?php defined('BASEPATH') OR exit('No direct script access allowed');


class testimonyControl extends CI_Controller{
 
    /* FORM INSERT */
    function testimonyForm(){
    authorization();
    $this->load->templateUser('testimony/testimony_form');

    }

    /* FORM UPDATE */ 
    function testimonyoUpdt(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);    
    $this->load->templateUser('testimony/testimony_update_form',$dados);
    }

    /* FORM DELETE */
    function testimonyDlt(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('testimony/testimony_delete',$dados);
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
    $this->load->templateUser('testimony/testimony_form');
            
    }else{
        
    date_default_timezone_set('America/Fortaleza');   
    $this->load->helper('date');
        $testimony=array(
            'title'=> $this->input->post('titulo'),
            'description'=> $this->input->post('descricao'),
            'data'=> date('d/m/Y \à\s H:i:s'),
        );

    $this->load->model('testimony_model');
    $this->testimony_model->insert($testimony);
    
     
   
        /* callback */
   $this->load->model('testimony_model');
   $dados= $this->testimony_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('testimony/testimonyView',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function testimonyDashboard(){
    
   $this->load->model('testimony_model');
   $dados= $this->testimony_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('testimony/testimonyView',$dados);
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
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('testimony/testimony_form');
            
    }else{

    date_default_timezone_set('America/Fortaleza');   
    $id=$this->input->post('id');
    $info=array(
    'id'=>$this->input->post('id'),
    'title'=>$this->input->post('titulo'),
    'description'=> $this->input->post('descricao'),
    'data'=> date('d/m/Y \à\s H:i:s'),
    );

    $this->load->model('testimony_model');
    $this->testimony_model->update($id,$info);
   

    $this->load->model('testimony_model');
    $dados= $this->testimony_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('success', "<center><p class='text-success'>ATUALIZAÇÃO REALIZADA!</center>");

     $this->load->view('testimony/testimonyView',$dados);
     $this->load->view('templateUser/sidebar.php');
    }

   }


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('testimony_model');
    $this->testimony_model->delete($id);
    

    $this->load->model('testimony_model');
    $dados= $this->testimony_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('testimony/testimonyView',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}