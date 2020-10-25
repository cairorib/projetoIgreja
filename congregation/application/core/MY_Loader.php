<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader{

    public function template($nome, $dados=array()){
        $this->view('header.php');
        $this->view($nome,$dados);
        $this->view('footer.php');

    }

    public function templateUser($nome, $dados=array()){
        $this->view('templateUser/headerUser.php');
        $this->view('templateUser/sidebar.php');
        $this->view('templateUser/navbar.php');
        $this->view($nome,$dados);
        $this->view('templateUser/footerUser.php');

    }


}