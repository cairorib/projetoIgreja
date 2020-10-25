<?php 


class Aviso_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('warning', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('warning')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('warning', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('warning'); 
    }

}