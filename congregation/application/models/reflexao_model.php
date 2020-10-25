<?php 


class Reflexao_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('reflexao', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('reflexao')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('reflexao', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('reflexao'); 
    }

}