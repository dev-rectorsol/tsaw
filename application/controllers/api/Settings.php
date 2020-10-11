<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Settings extends REST_Controller
{


      function __construct() {
          // Construct the parent class
          parent::__construct();

          $this->load->model('setting_model');

      }


    function contacts_post() {

          $result = $this->setting_model->get_contacts();
          if (!empty($result)) {
            // code...
            $data['status'] = 1;
            $data['reload'] = current_datetime();
            $data['data'] = json_decode($result->setting_value);
            $this->response($data, 200);
          } else {
            // If data not found.
            $data['status'] = 0;
            $data['msg'] = 0;
            $data['reload'] = current_datetime();
            $this->response($data, 200);
          }
    }

    function home_slider_post() {

          $result = $this->setting_model->get_slider();
          if (!empty($result)) {
            // code...
            $data['status'] = 1;
            $data['reload'] = current_datetime();
            $data['data'] = json_decode($result->setting_value);
            $this->response($data, 200);
          } else {
            // If data not found.
            $data['status'] = 0;
            $data['msg'] = 0;
            $data['reload'] = current_datetime();
            $this->response($data, 200);
          }
    }

    function metal_price_post(){
      $result = $this->setting_model->get_price();
      if (!empty($result)) {
        // code...
        $data['status'] = 1;
        $data['reload'] = current_datetime();
        $data['data'] = json_decode($result->setting_value);
        $this->response($data, 200);
      } else {
        // If data not found.
        $data['status'] = 0;
        $data['msg'] = 0;
        $data['reload'] = current_datetime();
        $this->response($data, 200);
      }
    }

    function address_post(){
      $result = $this->setting_model->get_address();
      if (!empty($result)) {
        // code...
        $data['status'] = 1;
        $data['reload'] = current_datetime();
        $data['data'] = json_decode($result->setting_value);
        $this->response($data, 200);
      } else {
        // If data not found.
        $data['status'] = 0;
        $data['msg'] = 0;
        $data['reload'] = current_datetime();
        $this->response($data, 200);
      }
    }

}
