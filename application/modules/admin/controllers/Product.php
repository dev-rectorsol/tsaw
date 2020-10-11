<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Vite {

	public $password;
	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
			$this->load->model('user');
			$this->load->model('product_model');
			$this->password = randomPassword();
  }
	public function index() {
		$data= array();
		$data['page'] ='product';
		$data['main_content']= $this->load->view('product/list-view',$data, true);
		$data['is_script']= $this->load->view('product/script',$data, true);
		$this->load->view('index',$data);
	}

	public function add() {
		$data= array();
		$data['page'] ='product';
		$data['main_content']= $this->load->view('product/add-view',$data, true);
		$data['is_script']= $this->load->view('product/script',$data, true);
		$this->load->view('index',$data);
	}

	public function edit(){
		pre($_GET);
	}

	public function save(){
		if ($_POST) {
			// code...
			$data = $this->security->xss_clean($_POST);
			$id = $this->common_model->get_last_id('product');
			$id = !empty($id) ? $id : 1;
			$join = [
				'product_code' => getCustomId($id, 'TSAW'),
				'product_name' => $data['product_name'],
				'price' => $data['price'],
				'discount_price' => $data['discount_price'],
				'product_image' => $data['product_image'],
				'product_details' => $data['product_details'],
			];
			if ($this->common_model->insert($join, 'product')) {

					$this->session->set_flashdata(array('error' => 0, 'msg' => 'product Information Save'));

					redirect($_SERVER['HTTP_REFERER'], 'refresh');

			}else{

				$this->session->set_flashdata(array('error' => 1, 'msg' => 'Action Failed!'));

				redirect($_SERVER['HTTP_REFERER'], 'refresh');

			}
		}else{
			echo json_encode(array('error' => 1, 'msg' => 'Request not allowed'));
		}
	}

	public function userdata(array $data, $id){
		if ($this->common_model->exists('user_details', array('user_id' => $id))) {
			return $this->common_model->update( array('details' => json_encode($data), 'user_id', $id, 'user_details' ) );
		}else{
			$userdata = [
				'user_id' => $id,
				'details' => json_encode($data),
			];
			return $this->common_model->insert($userdata, 'user_details');
		}
	}

	public function get_product(){

		$query = '';

		$output = array();

		$data = array();

		$query .= "
			SELECT * FROM product WHERE deleted != 1
		";

		if(!empty($_GET["search"]["value"]))
		{
			$query .= 'OR product_code LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR product_name LIKE "%'.$_GET["search"]["value"].'%" ';
		}

		if(isset($_GET["order"]))
		{
			$query .= 'ORDER BY '.$_GET['order']['0']['column'].' '.$_GET['order']['0']['dir'].' ';
		}
		else
		{
			$query .= 'ORDER BY created DESC ';
		}

		if($_GET["length"] != -1)
		{
			$query .= 'LIMIT ' . $_GET['start'] . ', ' . $_GET['length'];
		}

		$sql = $this->db->query($query);
		$result = $sql->result_array();
		$filtered_rows = $sql->num_rows();
		foreach($result as $row)
		{
			if (!empty($row['product_image'])) {
				$image = '<img class="product_image" src="'.base_url($row['product_image']).'" alt="">';
			}else{
				$image = "";
			}
			$sub_array = array();
			$sub_array[] = $image;
			$sub_array[] = $row['product_name'];
			$sub_array[] = $row['product_code'];
			$sub_array[] = $row['price'];
			$sub_array[] = $row['discount_price'];
			$sub_array[] = my_date_show($row['created']);
			$sub_array[] = '<a href="'.base_url('admin/product/edit?key=').$row['id'].'"> <button type="button" class="btn btn-link btn-circle"  data-placement="bottom" title="Edit product Information"><i class="fa fa-pencil-alt"></i></button></a>';
			$data[] = $sub_array;
		}



		$output = array(
			"draw"    			=> 	intval($_GET["draw"]),
			"recordsTotal"  	=>  $filtered_rows,
			"recordsFiltered" 	=> 	$this->common_model->rowCount('product'),
			"data"    			=> 	$data
		);

		echo json_encode($output);
	}

	public function new_product(){

		$query = '';

		$output = array();

		$data = array();

		$query .= "
			SELECT * FROM logme WHERE role_id = '2' AND kyc IS NULL OR kyc = 'pending'
		";

		if(!empty($_GET["search"]["value"]))
		{
			$query .= 'OR logid LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR name LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR city LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR email LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR phone LIKE "%'.$_GET["search"]["value"].'%" ';
			$query .= 'OR joindate LIKE "%'.$_GET["search"]["value"].'%" ';
		}

		if(isset($_GET["order"]))
		{
			$query .= 'ORDER BY '.$_GET['order']['0']['column'].' '.$_GET['order']['0']['dir'].' ';
		}
		else
		{
			$query .= 'ORDER BY created DESC ';
		}

		if($_GET["length"] != -1)
		{
			$query .= 'LIMIT ' . $_GET['start'] . ', ' . $_GET['length'];
		}

		$sql = $this->db->query($query);
		$result = $sql->result_array();
		$filtered_rows = $sql->num_rows();
		foreach($result as $row)
		{
			$status = '';

			if($row['kyc'] == 'pending')
			{
				$status = '<span class="badge badge-primary">Pending</span>';

			} elseif($row['kyc'] == 'cancel') {

				$status = '<span class="badge badge-danger">cancel</span>';

			} elseif($row['kyc'] == 'varify') {

				$status = '<span class="badge badge-success">Varify</span>';

			}else{
				$status = '<span class="badge badge-danger">N/A</span>';
			}

			$sub_array = array();
			$sub_array[] = $row['name'];
			$sub_array[] = $row['phone'];
			$sub_array[] = $row['city'];
			$sub_array[] = $status;
			$sub_array[] = my_date_show($row['joindate']);
			$sub_array[] = '<a href="'.base_url('admin/verification/kyc?type=product&key=').$row['logid'].'"> <button type="button" class="btn btn-link btn-circle"  data-placement="bottom" title="Check product KYC Information"><i class="fa fa-th-list"></i> &nbsp;Check</button></a>';
			$data[] = $sub_array;
		}



		$output = array(
			"draw"    			=> 	intval($_GET["draw"]),
			"recordsTotal"  	=>  $filtered_rows,
			"recordsFiltered" 	=> 	$this->product_model->get_kyc_new_product(),
			"data"    			=> 	$data
		);

		echo json_encode($output);
	}





}
