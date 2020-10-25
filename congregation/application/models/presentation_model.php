<?php 


class Presentation_model extends CI_Model{
    /* CREATE */
    function insert($registro){
    $this->db->insert('presentation', $registro);
   }

   /* READ */
     function buscaTodos(){
       return $this->db->get('presentation')->result_array();
    }

    /* UPDATE */
     function update($id, $info){
        $this->db->where('id', $id);
        $this->db->update('presentation', $info);
    }

    /* DELETE */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('presentation'); 
    }

}