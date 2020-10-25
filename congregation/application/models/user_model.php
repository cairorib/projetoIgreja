<?php 

class User_Model extends CI_Model{

    /* CREATE */    
    public function createUser($newUser){
        $this->db->insert('person', $newUser);
        $user= $this->db->get('person')->row_array();
         return $user;
    } 

    /* VERIFICAR USUARIO */

    public function  verifyUser($dados){
        
        $this->db->where('email', $dados['email']);
        $this->db->where('password', $dados['password']);
       $user= $this->db->get('person')->row_array();
        return $user;

    }

     /* READ */
     function buscaTodos(){
        return $this->db->get('person')->result_array();
     }
 
     
 
     /* DELETE */
     function delete($id){
         $this->db->where('id', $id);
         $this->db->delete('person'); 
     }


}




?>