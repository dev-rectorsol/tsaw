<?php

class Associate_model extends CI_Model{

  public function __construct()
  {
          $this->load->database();
  }

  public function get_associate_by_name($name){
		$this->db->select('logid AS id, name AS text');
		$this->db->from('users');
		$this->db->where('name LIKE', $name.'%');
		$result = $this->db->get();
		return $result->result();
	}


}
