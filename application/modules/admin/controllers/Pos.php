<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends Vite {


	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
  }
	public function index() {
		$data= array();
		$data['page'] ='POS';
		$data['main_content']= $this->load->view('pos/list-view',$data, true);
		$this->load->view('index',$data);
	}

	public function add() {
		$data= array();
		$data['page'] ='POS';
		$data['main_content']= $this->load->view('pos/add-view',$data, true);
		$this->load->view('index',$data);
	}

	public function submit(){
		if ($_POST) {
			// code...
			pre($_POST);
		}
	}

	public function customer(){

	}



}
