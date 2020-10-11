<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  	public function __construct()
  	{
  		parent::__construct();
      echo "hello world";exit;
      if(check()) {
        if(isAdmin($this->session->userdata('roles')))
          redirect(base_url() . 'admin', 'refresh' );
        elseif(isDistributor($this->session->userdata('roles')))
           redirect(base_url() . 'distributor', 'refresh' );
        elseif(isExecutor($this->session->userdata('roles')))
           redirect(base_url() . 'executor', 'refresh' );
        else
         echo json_encode(array('error' => 1, 'msg' => 'page not found'));
      }
      else {
        redirect(base_url() . 'auth', 'refresh' );
      }
  	}
    public function index(){

    }
}

/* End of file Home.php */
/* Location: ./application/modules/web/controllers/Home.php */ ?>
