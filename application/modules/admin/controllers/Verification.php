<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification extends Vite {

	public $varify;
	public $distributor = 'distributor';
	public $executor = 'executor';
	public $retailer = 'retailer';
	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
			$this->load->model('associate_model');
			$this->load->model('distributor_model');
			$this->load->model('user');
  }
	public function index()
	{
		$data= array();
		$data['page'] ='Dashboard';
		$data['newDistributor'] = $this->distributor_model->get_kyc_new_distributor();
		$data['allDistributor'] = $this->distributor_model->get_all_distributor_count();
		$data['newExecutor'] = $this->distributor_model->get_kyc_new_executor();
		$data['allExecutor'] = $this->distributor_model->get_all_executor_count();
		$data['main_content']= $this->load->view('varification/varify-dashboard',$data, true);
		$data['is_script']= $this->load->view('varification/script',$data, true);
		$this->load->view('index',$data);
	}

	// Dashboard List of data load vai user type

	public function load(){

			if (isset($_GET['tab']) && !empty($_GET['tab'])) {
				$type = $_GET['tab'];
				switch ($type) {
					case $this->distributor:

							$this->load->view('varification/distributor');

						break;

					case $this->executor:

							$this->load->view('varification/executor');

						break;

					case $this->retailer:

							$this->load->view('varification/retailer');

						break;

					default:
						// code...
						break;
				}

			}
	}

	public function kyc() {
		//
		$uri = $this->security->xss_clean($_GET);
		if (isset($uri['key']) && !empty($uri['key'])) {
			$data = array();
			$data['request'] = $uri;
			$type = $uri['type'];
			$key = $uri['key'];
			$data['type'] = $type;
			$result = $this->user->userKycDetails($key);

				$kycdata = !empty($result) ? json_decode($result->kyc) : '';
				$data['kycdata'] = $kycdata;
				$data['documents'] = $this->common_model->kycDocument($key);
				$data['banks'] = $this->common_model->get_bank_list($key);
				$data['status'] = $this->user->userKycstatus($key);
				$data['main_content'] =  $this->load->view('varification/kyc-varify',$data, true);
				$data['is_script']= $this->load->view('varification/script',$data, true);
		
			$this->load->view('index',$data);

		}else{


		}
	}


	public function kycaction() {

		$uri = $this->security->xss_clean($_GET);
		if (isset($uri['action']) && !empty($uri['key'])) {
			$data = array();
			$action = $uri['action'];
			$type = $uri['type'];
			$key = $uri['key'];
			$data['type'] = $type;
			switch ($type) {
				case $this->distributor:

							if($type == 'distributor' && $this->user->userKycUpdate($key, ['kyc' => $action]) ) {

								$this->session->set_flashdata(array('error' => 0, 'msg' => 'Distributor KYC Varification Done'));

								redirect($_SERVER['HTTP_REFERER'], 'refresh');

							} else {

								$this->session->set_flashdata(array('error' => 1, 'msg' => 'Distributor KYC Varification Failed.'));

								redirect($_SERVER['HTTP_REFERER'], 'refresh');

							}



					break;

					case $this->executor:

						echo "Action Not Found";

					break;

				default:
					// code...
					break;
			}
		}

	}
}
