<?php

class Setting_model extends CI_Model{

  public function __construct()
  {
          $this->load->database();
  }

  public function get_contacts(){

    return $this->db->select('setting_value')
      ->from('setting')
      ->where('setting_name', 'contacts')
      ->get()->row();
  }
  public function get_slider(){

    return $this->db->select('setting_value')
      ->from('setting')
      ->where('setting_name', 'home_slider')
      ->get()->row();
  }
  public function get_price(){

    return $this->db->select('setting_value')
      ->from('setting')
      ->where('setting_name', 'prices')
      ->get()->row();
  }
  public function get_address(){

    return $this->db->select('setting_value')
      ->from('setting')
      ->where('setting_name', 'address')
      ->get()->row();
  }

}
