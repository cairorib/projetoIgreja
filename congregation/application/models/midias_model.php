<?php 


class Midias_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('midias', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('midias')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('midias', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('midias'); 
    }

}