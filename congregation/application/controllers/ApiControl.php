<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ApiControl extends CI_Controller{

   function allDadosApi(){
   
   $this->load->model('aviso_model');
   $aviso=$this->aviso_model->buscaTodos();
   $this->load->model('donate_model');
   $donate=$this->donate_model->buscaTodos();
   $this->load->model('meeting_model');
   $meeting=$this->meeting_model->buscaTodos();  
   $this->load->model('midias_model');
   $midias=$this->midias_model->buscaTodos();
   $this->load->model('presentation_model');
   $presentation=$this->presentation_model->buscaTodos();
   $this->load->model('reflexao_model');
   $reflexao=$this->reflexao_model->buscaTodos();
   $this->load->model('store_model');
   $store=$this->store_model->buscaTodos();
   $this->load->model('testimony_model');
   $testimony=$this->testimony_model->buscaTodos();
 
    $dados= array(
       'aviso'=>$aviso,
       'donate'=>$donate,
       'meeting'=>$meeting,
       'midias'=>$midias,
       'presentation'=>$presentation,
       'reflexao'=>$reflexao,
       'store'=>$store,
       'testimony'=>$testimony,
        
   );
    $dados=array('dados'=>$dados);
   $this->output
        ->set_output(json_encode($dados));
   
   $this->load->view('services/api');
 
    }


    function recebeDados(){

        $data = json_decode(file_get_contents("php://input"),true);
        echo "<pre>";
        print_r($data);
        echo "</pre>";


//        $url = 'http://192.168.0.2/congregation/index.php/ApiControl/postDadosApi';
      /*   var_dump(($this->input->post('i')));
        var_dump($this->input->post()); */
        //$requestData = json_decode(file_get_contents('php://input'), true);

     /*    foreach ($requestData as $key => $val){
            $val = filter_var($val, FILTER_SANITIZE_STRING); // Remove all HTML tags from string
            $requestData[$key] = $val;
        } */
       // var_dump($requestData);

       // $jsonData= $this->input->post('name');
        //Initiate cURL.
      //  $ch = curl_init($url);
         
        //The JSON data.
       /*  $jsonData = array(
            'username' => 'MyUsername',
            'password' => 'MyPassword'
        );
          */
        //Encode the array into JSON.
       // $jsonDataEncoded = json_encode($jsonData);
         
      // var_dump($jsonDataEncoded); 
        //Tell cURL that we want to send a POST request.
       // curl_setopt($ch, CURLOPT_POST, 1);
         
        //Attach our encoded JSON string to the POST fields.
       // curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
         
        //Set the content type to application/json
       // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
         
        //Execute the request
      //  $result = curl_exec($ch);

        $this->load->view('services/apipost');
    }



}