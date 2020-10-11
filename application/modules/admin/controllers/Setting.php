<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends Vite {

	public function __construct()
	{
			parent::__construct();
      $this->load->model('common_model');
      $this->load->model('article_model');
	}
  public function index(){

  }


	public function price() {
		$data= array();
		$data['page'] ='price';
		$data['prices'] = json_decode($this->db->get_where('setting', array('setting_name' => 'prices'))->row()->setting_value, true);
		$data['main_content']= $this->load->view('setting/price/add-view',$data, true);
		$this->load->view('index',$data);
	}

	public function update_price() {
		if($_POST){
			//echo print_r($slider);exit;
			$data = [
				strtolower($_POST['setting_name']) => $_POST['setting_value']
				];
			$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'prices'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'prices'))->row()->setting_value : '[]';
			$arr_data = json_decode($contact_value, true);

			$jsondata = json_encode(array_merge($arr_data, $data));
			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'prices', 'setting');

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'prices update successfully'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}


	public function slider(){
		$data= array();
		$data['page'] ='Slider';
		$data['slider'] = json_decode($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value, true);
		$data['main_content']= $this->load->view('setting/slider',$data, true);
		$this->load->view('index',$data);
	}

	public function addslider(){
		if($_POST){
			$slider=$this->security->xss_clean($_POST);
			//echo print_r($slider);exit;
			$data = [
				'heading' => $slider['heading'],
				'details' => $slider['details'],
				'buttonUrl' => $slider['url'],
				'source' => $slider['featureImage']
			];

			$slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value : '[]';
	//echo print_r($slider_value);exit;
			$arr_data = json_decode($slider_value, true);
			//echo print_r($arr_data);exit;
			// Push user data to array
			array_push($arr_data, $data);

			$jsondata = json_encode($arr_data);
			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'home_slider', 'setting');

			$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value;

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Slider Added Done'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
	public function editslider($id){
		if($_POST){
			$slider=$this->security->xss_clean($_POST);
			//echo print_r($slider);exit;
			$data = [
				'heading' => $slider['heading'],
				'details' => $slider['details'],
				'buttonUrl' => $slider['url'],
				'source' => $slider['featureImage']
			];
			$slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value : '[]';
	//echo print_r($slider_value);exit;
			$arr_data = json_decode($slider_value, true);
			//echo print_r($arr_data);exit;
			// Push user data to array
			unset($arr_data[$id]);

			array_push($arr_data, $data);

			$jsondata = json_encode($arr_data);
			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'home_slider', 'setting');

			$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value;

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Slider Added Done'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
	public function deleteslider($id){
		$slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value : '[]';

		$arr_data = json_decode($slider_value, true);

		unset($arr_data[$id]);

		$jsondata = json_encode($arr_data);

		$data = [
			"setting_value" => $jsondata,
		];
		$this->common_model->update($data, 'setting_name', 'home_slider', 'setting');

		$this->session->set_flashdata(array('error' => 0, 'msg' => 'Slider Deleted Done'));

		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


// ==================================================================================
		// Add logo
		public function logo(){
			$data= array();
			$data['page'] ='Slider';
			$data['app_logo'] = json_decode($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value, true);
			$data['main_content']= $this->load->view('setting/add_logo',$data, true);
			$this->load->view('index',$data);
		}
		public function addlogo(){
			if($_POST){
				$logo=$this->security->xss_clean($_POST);
				//echo print_r($slider);exit;
				$data = [
					'discription' => $logo['discription'],
					'source' => $logo['featureImage']
				];
				$logo_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '[]';
				$arr_data = json_decode($logo_value, true);
				array_push($arr_data, $data);

				$jsondata = json_encode($arr_data);
				$data = [
					"setting_value" => $jsondata,
				];
				$this->common_model->update($data, 'setting_name', 'application_logo', 'setting');

				$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value;

				$this->session->set_flashdata(array('error' => 0, 'msg' => 'Title Added Done'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}
		public function editlogo($id){
			if($_POST){
				$pp_title=$this->security->xss_clean($_POST);
				//echo print_r($slider);exit;
				$data = [
					'discription' => $pp_title['discription'],
					'source' => $pp_title['featureImage']
				];
				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '[]';
				$arr_data = json_decode($contact_value, true);
				unset($arr_data[$id]);
				array_push($arr_data, $data);

				$jsondata = json_encode($arr_data);
				$data = [
					"setting_value" => $jsondata,
				];
				$this->common_model->update($data, 'setting_name', 'application_logo', 'setting');

				$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value;

				$this->session->set_flashdata(array('error' => 0, 'msg' => 'Contact Added Done'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}
		public function deletelogo($id){
			$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_logo'))->row()->setting_value : '[]';

			$arr_data = json_decode($title_value, true);

			unset($arr_data[$id]);

			$jsondata = json_encode($arr_data);

			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'application_logo', 'setting');

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Title Deleted Done'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}

}
