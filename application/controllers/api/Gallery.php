<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Gallery extends REST_Controller
{


      function __construct() {
          // Construct the parent class
          parent::__construct();

          $this->load->model('gallery_model');

      }


    function index_post() {

          $result = $this->gallery_model->get_gallery();
          if (!empty($result)) {
            // code...
            $data['data_count'] = count($result);
            $data['msg'] = 'gallery loaded';
            $data['reload'] = current_datetime();
            foreach ($result as $key => $value) {
              $data['data'][] = json_decode($value);
            }
            $this->response($data, 200);
          }else{
            // If data not found.
            $data['data_count'] = count($result);
            $data['msg'] = 'image not found';
            $data['reload'] = current_datetime();
            $this->response($data, 200);
          }
    }

}
