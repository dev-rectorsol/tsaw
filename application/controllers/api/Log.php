<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Log extends REST_Controller
{


      function __construct() {
          // Construct the parent class
          parent::__construct();

          $this->load->model('common_model');

          $this->load->library(['auth', 'session']);
          $this->load->library('form_validation');

          $this->register_history();

      }


    function index_post()
    {

      if($this->post('email')) {
        // check email exist
          $temp = $this->auth->login($_POST);
          if ($temp['status'])
          {
              $data = [
                'session' => $this->session->userdata('__ci_last_regenerate'),
                'uid' => $this->session->userdata('userID'),
                'uname' => $this->session->userdata('username'),
                'uemail' => $this->session->userdata('email'),
                'uphone' => $this->session->userdata('phone'),
                'roles' => $this->session->userdata('roles'),
                'is_login' => $this->session->userdata('loginStatus'),
                'msg' => 'user login success'
              ];
              $this->response($data, 200);

          }else{
            $this->response(array('is_login' => 0, 'msg' => 'email or password not exists'), 200);
          }
        } else {
            $this->response(array('is_login' => 0, 'msg' => 'user not registered'), 200);
        }
    }


    public function register_history()
    {
        $preferred_languages = preferred_languages(['en'], $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

        $languages = array();

        foreach ($preferred_languages as $key => $priority) {
            $languages[] = $key;
        }

        $data = array(
            'page' => uri_string(),
            'languages' => implode(',', $languages),
            'created_at' => date("Y-m-d H:i:s")
        );

        $browser = browser_data();

        $data['browser'] = $browser['name'];
        $data['os'] = ucwords($browser['platform']);

        $ip = real_ip();
        $ip_info = ip_info($ip);

        $data['ip'] = $ip;

        if (!empty($ip_info['loc'])) {
            $loc = explode(',', $ip_info['loc']);

            if (!empty($loc[0]) && !empty($loc[1])) {
                $data['lat'] = $loc[0];
                $data['lng'] = $loc[1];
            }
        }

        if (!empty($ip_info['city'])) {
            $data['city'] = $ip_info['city'];
        }

        if (!empty($ip_info['region'])) {
            $data['region'] = $ip_info['region'];
        }

        if (!empty($ip_info['country'])) {
            $data['country'] = $ip_info['country'];
        }

        if (!empty($ip_info['postal'])) {
            $data['postal'] = $ip_info['postal'];
        }

        // pre($data);exit;

        $this->common_model->insert($data, 'history');
    }

}
