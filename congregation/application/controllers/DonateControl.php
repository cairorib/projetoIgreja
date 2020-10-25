<?php defined('BASEPATH') OR exit('No direct script access allowed');


class DonateControl extends CI_Controller{
 
    /* FORM INSERT */
    function insertForm(){
    authorization();
    $this->load->templateUser('donate/insertForm');
 
    }

    /* FORM UPDATE */ 
    function updateForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);    
    $this->load->templateUser('donate/update_form',$dados);
    }

    /* FORM DELETE */
    function deleteForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('donate/delete_form',$dados);
    }


    /* CREATE */
    function insert(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'banco', 'banco', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'conta','conta', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'agencia','agencia', 'trim|required|min_length[1]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('donate/insertForm');

            
    }else{
        
          $registro=array(
            'banco'=> $this->input->post('banco'),
            'conta'=> $this->input->post('conta'),
            'tipo'=> $this->input->post('tipo'),
            'agencia'=> $this->input->post('agencia'),
            'iban'=> $this->input->post('iban'),
            'swift'=> $this->input->post('swift'),
        );

    $this->load->model('donate_model');
    $this->donate_model->insert($registro);
    
     
   
        /* callback */
   $this->load->model('donate_model');
   $dados= $this->donate_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('donate/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function Dashboard(){
    
   $this->load->model('donate_model');
   $dados= $this->donate_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('donate/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
    
    }

   /*  UPDATE */

   function update(){
    authorization();

    $this->load->library('form_validation');
   
     $this->form_validation->set_rules(
        'banco', 'banco', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'conta','conta', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'agencia','agencia', 'trim|required|min_length[1]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){    
    //houve um bug com a library form, razão de reenviar os $dados     
    $dados=array(
        'id'=>$this->input->post('id'),
        'banco'=> $this->input->post('banco'),
        'conta'=> $this->input->post('conta'),
        'tipo'=> $this->input->post('tipo'),
        'agencia'=> $this->input->post('agencia'),
        'iban'=> $this->input->post('iban'),
        'swift'=> $this->input->post('swift'),
    );
    $dados=array('dados'=>$dados);
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('donate/update_form',$dados);
            
    }else{

     
    $id=$this->input->post('id');
    $info=array(
        'id'=>$this->input->post('id'),
        'banco'=> $this->input->post('banco'),
        'conta'=> $this->input->post('conta'),
        'tipo'=> $this->input->post('tipo'),
        'agencia'=> $this->input->post('agencia'),
        'iban'=> $this->input->post('iban'),
        'swift'=> $this->input->post('swift'),
    );

    $this->load->model('donate_model');
    $this->donate_model->update($id,$info);
   

    $this->load->model('donate_model');
    $dados= $this->donate_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('success', "<center><p class='text-success'>ATUALIZAÇÃO REALIZADA!</center>");

     $this->load->view('donate/dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');
    }

   }


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('donate_model');
    $this->donate_model->delete($id);
    

    $this->load->model('donate_model');
    $dados= $this->donate_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('donate/Dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}