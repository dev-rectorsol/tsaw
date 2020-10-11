<?php (defined('BASEPATH')) OR exit('No direct script access allowed');



class Employee extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if(check()){
      if(!isExecutor($this->session->userdata('roles'))){
        redirect(base_url(), 'refresh');
      }
    }else{
        redirect(base_url(), 'refresh');
    }
  }

  function kycStatus() {

    $status = getKyc($this->session->userdata('userID'));

    switch ($status) {
      case 'pending':

        redirect(base_url('cpending'));  break;

      case 'cancel':

        redirect(base_url('cpending'));  break;

      case 'varify':

        return true;

      default:

        redirect(base_url('kycnotify'));  break;

    }

  }

}
