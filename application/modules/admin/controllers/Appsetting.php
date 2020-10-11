<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appsetting extends Vite {

	public function __construct()
	{
			parent::__construct();
	
      $this->load->model('common_model');
      $this->load->model('article_model');
	}
  public function index(){

  }

	public function slider() {
		$data= array();
		$data['page'] ='Slider';
		$data['slider'] = json_decode($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value, true);
		$data['main_content']= $this->load->view('appsetting/slider/cart-view',$data, true);
		$this->load->view('index',$data);
	}

	public function addslider(){
		if($_POST){
			$data = [
				'source' => $_POST['image']
			];

			$slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'home_slider'))->row()->setting_value : '[]';

			$arr_data = json_decode($slider_value, true);

			array_push($arr_data, $data);

			$jsondata = json_encode($arr_data);

			// $arr_data = json_decode($slider_value, true);
			//
			// $jsondata = json_encode(array_merge($arr_data, $data));

			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'home_slider', 'setting');

			echo json_encode(array('error' => 0, 'msg' => 'Slider Added Done'));
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

	// Add contact Us details
	public function contact(){
		$data= array();
		$data['page'] ='Slider';
		$data['contacts'] = json_decode($this->db->get_where('setting', array('setting_name' => 'contacts'))->row()->setting_value, true);
		$data['main_content']= $this->load->view('appsetting/contact/add-view',$data, true);
		$this->load->view('index',$data);
	}
	public function addcontactinfo(){
		if($_POST){
			//echo print_r($slider);exit;
			$data = [
				strtolower($_POST['setting_name']) => $_POST['setting_value']
				];
			$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contacts'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contacts'))->row()->setting_value : '[]';
			$arr_data = json_decode($contact_value, true);

			$jsondata = json_encode(array_merge($arr_data, $data));
			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'contacts', 'setting');

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Contact Added Done'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
	public function editcontact($id){
		if($_POST){
			$contact_us=$this->security->xss_clean($_POST);
			//echo print_r($slider);exit;
			$data = [
				'address' => $contact_us['address'],
				'email' => $contact_us['email'],
				'phone' => $contact_us['phone'],
			];
			$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '[]';
			$arr_data = json_decode($contact_value, true);
			unset($arr_data[$id]);
			array_push($arr_data, $data);

			$jsondata = json_encode($arr_data);
			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'contact_us', 'setting');

			$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value;

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Contact Added Done'));

			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}
	public function deletecontact($id){
		$slider_value = !empty($this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'contact_us'))->row()->setting_value : '[]';

		$arr_data = json_decode($slider_value, true);

		unset($arr_data[$id]);

		$jsondata = json_encode($arr_data);

		$data = [
			"setting_value" => $jsondata,
		];
		$this->common_model->update($data, 'setting_name', 'contact_us', 'setting');

		$this->session->set_flashdata(array('error' => 0, 'msg' => 'contact Deleted Done'));

		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}
		//end  Add contact Us details

// ========================================================


		// Add Title details
		public function Title(){
			$data= array();
			$data['page'] ='Slider';
			$data['app_title'] = json_decode($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value, true);
			$data['main_content']= $this->load->view('setting/app_title',$data, true);
			$this->load->view('index',$data);
		}
		public function addtitle(){
			if($_POST){
				$pp_title=$this->security->xss_clean($_POST);
				//echo print_r($slider);exit;
				$data = [
					'title' => $pp_title['title'],
					'source' => $pp_title['featureImage']
				];
				$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '[]';
				$arr_data = json_decode($title_value, true);
				array_push($arr_data, $data);

				$jsondata = json_encode($arr_data);
				$data = [
					"setting_value" => $jsondata,
				];
				$this->common_model->update($data, 'setting_name', 'application_title', 'setting');

				$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value;

				$this->session->set_flashdata(array('error' => 0, 'msg' => 'Title Added Done'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}
		public function edittitle($id){
			if($_POST){
				$pp_title=$this->security->xss_clean($_POST);
				//echo print_r($slider);exit;
				$data = [
					'title' => $pp_title['title'],
					'source' => $pp_title['featureImage']
				];
				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '[]';
				$arr_data = json_decode($contact_value, true);
				unset($arr_data[$id]);
				array_push($arr_data, $data);

				$jsondata = json_encode($arr_data);
				$data = [
					"setting_value" => $jsondata,
				];
				$this->common_model->update($data, 'setting_name', 'application_logo', 'setting');

				$data['slider'] = $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value;

				$this->session->set_flashdata(array('error' => 0, 'msg' => 'Contact Added Done'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}
		public function deletetitle($id){
			$title_value = !empty($this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'application_title'))->row()->setting_value : '[]';

			$arr_data = json_decode($title_value, true);

			unset($arr_data[$id]);

			$jsondata = json_encode($arr_data);

			$data = [
				"setting_value" => $jsondata,
			];
			$this->common_model->update($data, 'setting_name', 'application_title', 'setting');

			$this->session->set_flashdata(array('error' => 0, 'msg' => 'Title Deleted Done'));

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

		public function address() {
			$data= array();
			$data['page'] ='Slider';
			$data['contacts'] = json_decode($this->db->get_where('setting', array('setting_name' => 'address'))->row()->setting_value, true);
			$data['main_content']= $this->load->view('appsetting/address/add-view',$data, true);
			$this->load->view('index',$data);
		}

		public function addaddressinfo(){
			if($_POST){
				//echo print_r($slider);exit;
				$data = [
					strtolower($_POST['setting_name']) => $_POST['setting_value']
					];
				$contact_value = !empty($this->db->get_where('setting', array('setting_name' => 'address'))->row()->setting_value) ? $this->db->get_where('setting', array('setting_name' => 'address'))->row()->setting_value : '[]';
				$arr_data = json_decode($contact_value, true);

				$jsondata = json_encode(array_merge($arr_data, $data));
				$data = [
					"setting_value" => $jsondata,
				];
				$this->common_model->update($data, 'setting_name', 'address', 'setting');

				$this->session->set_flashdata(array('error' => 0, 'msg' => 'Address Added Done'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');
			}
		}

}
