<?php 


class Donate_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('donate', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('donate')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('donate', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('donate'); 
    }

}