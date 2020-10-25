<?php

class Count_model extends CI_Model{

    function count_all_tables(){
       $total= array(
        'donate'=> $this->db->count_all_results('donate'),
        'meeting'=> $this->db->count_all_results('meeting'),
        'midias'=> $this->db->count_all_results('midias'),
        'person'=> $this->db->count_all_results('person'),
        'presentation'=> $this->db->count_all_results('presentation'),
        'reflexao'=> $this->db->count_all_results('reflexao'),
        'store'=> $this->db->count_all_results('store'),
        'testimony'=> $this->db->count_all_results('testimony'),
        'warning'=> $this->db->count_all_results('warning'),
       );
       return $total;
    }


}



?>