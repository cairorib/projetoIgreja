<?php defined('BASEPATH') OR exit('No direct script access allowed');


class MeetingControl extends CI_Controller{
 
    /* FORM INSERT */
    function insertForm(){
    authorization();
    $this->load->templateUser('meeting/insertForm');
 
    }

    /* FORM UPDATE */ 
    function updateForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);    
    $this->load->templateUser('meeting/update_form',$dados);
    }

    /* FORM DELETE */
    function deleteForm(){
    authorization();
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    $this->load->templateUser('meeting/delete_form',$dados);
    }


    /* CREATE */
    function insert(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'nome', 'nome', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'descricao','descricao', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'endereco','endereco', 'trim|required|min_length[1]'
    );
    $this->form_validation->set_rules(
        'horario','horario', 'trim|required|min_length[1]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('meeting/insertForm');

            
    }else{
        
          $registro=array(
            'title'=> $this->input->post('nome'),
            'description'=> $this->input->post('descricao'),
            'day'=> $this->input->post('dia'),
            'hour'=> $this->input->post('horario'),
            'local'=> $this->input->post('endereco'),
            'complement'=> $this->input->post('complemento'),
            'cep'=> $this->input->post('cep'),
            'tel'=> $this->input->post('telefone'),
        );

    $this->load->model('meeting_model');
    $this->meeting_model->insert($registro);
    
     
   
        /* callback */
   $this->load->model('meeting_model');
   $dados= $this->meeting_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('meeting/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
        
        }
    }
    /* READ */
    
   function Dashboard(){
    
   $this->load->model('meeting_model');
   $dados= $this->meeting_model->buscaTodos();
   $dados=array('dados'=>$dados);
    $this->load->view('meeting/dashboard',$dados);
    $this->load->view('templateUser/sidebar.php');
    
    }

   /*  UPDATE */

   function update(){
    authorization();

    $this->load->library('form_validation');
    $this->form_validation->set_rules(
        'nome', 'nome', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'descricao','descricao', 'trim|required|min_length[3]'
    );
    $this->form_validation->set_rules(
        'endereco','endereco', 'trim|required|min_length[1]'
    );
    $this->form_validation->set_rules(
        'horario','horario', 'trim|required|min_length[1]'
    );
    
    $success= $this->form_validation->run();

    if(!$success){    
    //houve um bug com a library form, razão de reenviar os $dados     
    $dados=array(
            'id'=>$this->input->post('id'),
            'title'=> $this->input->post('nome'),
            'description'=> $this->input->post('descricao'),
            'day'=> $this->input->post('dia'),
            'hour'=> $this->input->post('horario'),
            'local'=> $this->input->post('endereco'),
            'complement'=> $this->input->post('complemento'),
            'cep'=> $this->input->post('cep'),
            'tel'=> $this->input->post('telefone'),
    );
    $dados=array('dados'=>$dados);
     
    $this->form_validation->set_error_delimiters("<b><p class= 'text-danger'>","</p></b>");
    $this->load->templateUser('meeting/update_form',$dados);
            
    }else{

     
    $id=$this->input->post('id');
    $info=array(
        'id'=>$this->input->post('id'),
            'title'=> $this->input->post('nome'),
            'description'=> $this->input->post('descricao'),
            'day'=> $this->input->post('dia'),
            'hour'=> $this->input->post('horario'),
            'local'=> $this->input->post('endereco'),
            'complement'=> $this->input->post('complemento'),
            'cep'=> $this->input->post('cep'),
            'tel'=> $this->input->post('telefone'),
    );

    $this->load->model('meeting_model');
    $this->meeting_model->update($id,$info);
   

    $this->load->model('meeting_model');
    $dados= $this->meeting_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('success', "<center><p class='text-success'>ATUALIZAÇÃO REALIZADA!</center>");

     $this->load->view('meeting/dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');
    }

   }


  /*  DELETE */

  function delete(){
    $id=$this->input->post('id');
    $this->load->model('meeting_model');
    $this->meeting_model->delete($id);
    

    $this->load->model('meeting_model');
    $dados= $this->meeting_model->buscaTodos();
    $dados=array('dados'=>$dados);
 
    $this->session->set_flashdata('danger', "<center><p class='text-danger'>REGISTRO REMOVIDO COM SUCESSO!</center>");

     $this->load->view('meeting/Dashboard',$dados);
     $this->load->view('templateUser/sidebar.php');


  }


}