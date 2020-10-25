<?php 


class Store_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('store', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('store')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('store', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('store'); 
    }

}