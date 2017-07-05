<?php
class Data_model extends CI_Model {
    
  function get_data() {
    $query = $this->db->get('tbl_data');
    if (count($query->result()) > 0) {
      return $query->result();
    }
    else {
      return FALSE;
    }
  }

}

?>
