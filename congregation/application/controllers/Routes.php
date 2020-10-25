<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Routes extends CI_Controller{

     /* ROTAS SIDEBAR */
    function home(){
        authorization();
        $this->load->model('count_model');
        $tabelas=$this->count_model->count_all_tables();
        $tabelas=array('tabelas'=>$tabelas); 


         $this->load->templateUser('dashboard/home',$tabelas);
        // $this->load->view('dashboard/home');

    } 
   
    
    function aviso(){
        $this->load->templateUser('aviso/aviso_form');

    } 
    function testimony(){
        $this->load->templateUser('testimony/testimony_form');
    }

    function meeting(){
        $this->load->templateUser('meeting/meeting_form');
    }

    function midias(){
        $this->load->templateUser('midias/dashboard');
    }

    function media(){
        $this->load->templateUser('media/media_form');
    }

    function quemSomos(){
        $this->load->templateUser('quemSomos/quemSomos_form');
    }

    function store(){
        $this->load->templateUser('store/store_form');
    }

    function offer(){
        $this->load->templateUser('offer/offer_form');
    }


   /*  ROTAS UPDATE */
    /* REFLEXAO */
   

   /* AVISO */
   function avisosUpdt(){
    $dados= $this->input->post('dados');
    $dados=array('dados'=>$dados);
    
    $this->load->templateUser('aviso/aviso_update_form',$dados);
    }

    /* TESTEMUNHOS */
   
   


    /* ROTAS DELETE */
   
   /* REFLEXÃO */
   function reflexaoDlt(){
    
    }

    /* AVISO */
    function avisoDlt(){
        $dados= $this->input->post('dados');
        $dados=array('dados'=>$dados);
        $this->load->templateUser('aviso/aviso_delete',$dados);
        }

    /* TESTEMUNHO */
 /*     */

}