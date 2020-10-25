<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ExportControl extends CI_Controller{

    function printReflexao(){
        authorization();

        $this->load->model('reflexao_model');
        $dados=$this->reflexao_model->buscaTodos();
        $dados=array('dados'=>$dados);
        $this->load->view('dashboard/reflexaoExport',$dados); 
     }
     
     function printAviso(){
        authorization();

        $this->load->model('aviso_model');
        $dados=$this->aviso_model->buscaTodos();
        $dados=array('dados'=>$dados);
        $this->load->view('dashboard/avisoExport',$dados); 
     }

     function printMeeting(){
        authorization();

        $this->load->model('meeting_model');
        $dados=$this->meeting_model->buscaTodos();
        $dados=array('dados'=>$dados);
        $this->load->view('dashboard/meetingExport',$dados); 
     }

     function printTestimony(){
      authorization();

      $this->load->model('testimony_model');
      $dados=$this->testimony_model->buscaTodos();
      $dados=array('dados'=>$dados);
      $this->load->view('dashboard/testimonyExport',$dados); 
   }

   function printMidias(){
      authorization();

      $this->load->model('midias_model');
      $dados=$this->midias_model->buscaTodos();
      $dados=array('dados'=>$dados);
      $this->load->view('dashboard/MidiasExport',$dados); 
   }

   function printStore(){
      authorization();

      $this->load->model('store_model');
      $dados=$this->store_model->buscaTodos();
      $dados=array('dados'=>$dados);
      $this->load->view('dashboard/storeExport',$dados); 
   }

   function printDonate(){
      authorization();

      $this->load->model('donate_model');
      $dados=$this->donate_model->buscaTodos();
      $dados=array('dados'=>$dados);
      $this->load->view('dashboard/donateExport',$dados); 
   }

   function printUser(){
      authorization();

      $this->load->model('user_model');
      $dados=$this->user_model->buscaTodos();
      $dados=array('dados'=>$dados);
      $this->load->view('dashboard/userExport',$dados); 
   }


}