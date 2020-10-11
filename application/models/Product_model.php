<?php

class Product_model extends CI_Model{

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

  function get_kyc_new_distributor(){
    return $this->db->query('SELECT * FROM logme WHERE role_id = "2" AND kyc IS NULL')->num_rows();
  }
  function get_all_distributor_count(){
    return $this->db->query('SELECT * FROM logme WHERE role_id = "2" AND deleted = 0')->num_rows();
  }
  function get_kyc_new_executor(){
    return $this->db->query('SELECT * FROM logme WHERE role_id = "3" AND kyc IS NULL')->num_rows();
  }
  function get_all_executor_count(){
    return $this->db->query('SELECT * FROM logme WHERE role_id = "3" AND deleted = 0')->num_rows();
  }


}
