<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Vite {


	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
  }
	public function index()
	{
		$data= array();
		$data['page'] ='Dashboard';
		$data['main_content']= $this->load->view('home',$data, true);
		$this->load->view('index',$data);
	}

	public function livemcx(){
		$data= array();
		$data['page'] ='Dashboard';

		$result = get_web_page('https://www.mcxdata.in/');

		if ( $result['errno'] != 0 )
		    $page = 'error: bad url, timeout, redirect loop';

		if ( $result['http_code'] != 200 )
		    $page = 'error: no page, no permissions, no service';

		$data['page'] = $result['content'];
		$data['main_content']= $this->load->view('live/mxclive',$data, true);
		$this->load->view('index',$data);
	}

	public function livencdex(){
		$data= array();
		$data['page'] ='Dashboard';
		$result = get_web_page('https://www.mcxdata.in/livencdex.aspx');

		if ( $result['errno'] != 0 )
		    $page = 'error: bad url, timeout, redirect loop';

		if ( $result['http_code'] != 200 )
		    $page = 'error: no page, no permissions, no service';

		$data['page'] = $result['content'];
		$data['main_content']= $this->load->view('live/mxclive',$data, true);
		$this->load->view('index',$data);
	}




}
