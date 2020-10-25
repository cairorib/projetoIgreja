<?php 


class Testimony_model extends CI_Model{
    /* CREATE */
    function insert($testimony){
    $this->db->insert('testimony', $testimony);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('testimony')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('testimony', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('testimony'); 
    }

}