<?php defined('BASEPATH') OR exit('No direct script access allowed');


class UserControl extends CI_Controller{
  
    /* FORM INSERT */
    function insertForm(){
    authorization();
    $this->load->templateUser('user/insertForm');
 
    }

  

    /* FORM DELETE */
    function deleteForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('user/delete_form',$dados);
    }


    /* CREATE */
    function insert(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'nome', 'nome','required'
    );

    $this->form_validation->set_rules(
        'sobrenome','sobrenome', 'required'
    );
    $this->form_validation->set_rules(
        'email','email', 'required'
    );
    $this->form_validation->set_rules(
        'senha', 'senha', 'trim|required|min_length[8]'
    );

    $success=$this->form_validation->run();

    if(!$success){
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('user/insertForm');

            
    }else{
        
        $newUser= array(
            'name'=> $this->input->post('nome'),
            'surname'=> $this->input->post('sobrenome'),
            'email'=> $this->input->post('email'),
            'password'=>  md5($this->input->post('senha')),
            );
            
            $this->load->model('user_model');
            $this->user_model->createUser($newUser);
     
     
   
        /* callback */
   $this->load->model('user_model');
   $dados= $this->user_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('user/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function Dashboard(){
    
   $this->load->model('user_model');
   $dados= $this->user_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('user/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
    
    }

   


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('user_model');
    $this->user_model->delete($id);
    

    $this->load->model('user_model');
    $dados= $this->user_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('user/Dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}