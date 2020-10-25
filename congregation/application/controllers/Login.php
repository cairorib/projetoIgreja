<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function index(){
        $this->load->view('user/login');
 
    }

    public function createUserForm(){

        $this->load->template('user/newUserForm');
     }



    public function newUser(){
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
            
            $this->form_validation->set_error_delimiters("<p class= 'text-danger'>","</p>");
            $this->session->set_flashdata('danger',' mensagem de erro' );

            $this->load->template('user/newUserForm');

        }else{
            
            $newUser= array(
            'name'=> $this->input->post('nome'),
            'surname'=> $this->input->post('sobrenome'),
            'email'=> $this->input->post('email'),
            'password'=>  md5($this->input->post('senha')),
            );
            
            $this->load->model('user_model');
            $this->user_model->createUser($newUser);
            $this->session->set_flashdata('success', "<center><p class='text-success' >Novo usuário cadastrado!</p></center>");
            redirect('/');
            
        }
 
 
    }

    public function verify(){ 
        $dados=array(
        'email'=>$this->input->post('email'),
        'password'=> md5($this->input->post('senha')),
        );    
        $this->load->model('user_model');
        $user=$this->user_model->verifyUser($dados);

        if($user){
 
            $this->session->set_userdata('user', $user);
            $this->session->set_flashdata('secondary', 'bem vindo '.$_SESSION['user']['name']);
            $this->load->model('count_model');
            $tabelas=$this->count_model->count_all_tables();
            $tabelas=array('tabelas'=>$tabelas); 
    
    
             $this->load->templateUser('dashboard/home',$tabelas);
        }
        else{
            $this->session->set_flashdata('danger', "<center><b><p class='text-danger'>Login ou senha inválidos</p></b></center>");
            redirect('/');
        }

    }

    public function logout(){
        $this->session->unset_userdata('user');
        $this->session->set_flashdata('success', "<center><p class='text-success' >Deslogado com sucesso!</p></center>");
        redirect('/');

    }


}