<?php 
      function authorization(){
        $ci=get_instance();
        $user=$ci->session->userdata('user');
        if(!$user){
            $ci->session->set_flashdata('danger', "<center><p class='text-danger'>vc precisa estar logado</p></center>");
            redirect('/');
        }else{
            return $user;
        }



    }



?>