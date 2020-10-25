<?php 


class Meeting_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('meeting', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('meeting')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('meeting', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('meeting'); 
    }

}