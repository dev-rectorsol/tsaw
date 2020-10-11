<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Associate extends Vite {


	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
			$this->load->model('associate_model');
  }
	public function index()
	{
		$data= array();
		$data['page'] ='Dashboard';
		$data['users'] = $this->common_model->select_limit_value('users', 10);
		$data['main_content']= $this->load->view('home',$data, true);
		$this->load->view('index',$data);
	}

	public function get_associates(){
		if ($_POST) {
			$subject=$this->security->xss_clean($_POST);
			$data = $this->associate_model->get_associate_by_name($subject['search']);
			echo json_encode($data);
		}
	}


}
