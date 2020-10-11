<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Executor extends Vite {

	public function __construct()
  {
      parent::__construct();
			$this->load->model('common_model');
			$this->load->model('user');
			$this->load->model('distributor_model');
  }
	public function index() {
		$data= array();
		$data['page'] ='Executor';
		$data['main_content']= $this->load->view('executor/list-view',$data, true);
		$data['is_script']= $this->load->view('executor/script',$data, true);
		$this->load->view('index',$data);
	}

	public function get_executor(){

		$query = '';

		$output = array();

		$data = array();

		$query .= "
			SELECT * FROM logme WHERE role_id = '3' AND kyc IS NULL OR kyc = 'pending'
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

		if(!empty($_GET["order"]))
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
			$kyc = '';
			if ($row['kyc'] == 'varify') {
				// code...
				$kyc = '<i class="fa fa-circle text-success font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Active"></i>';
			}else{
				$kyc = '<i class="fa fa-circle text-warning font-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pending"></i>';
			}
			if($row['status'] == 'active')
			{
				$status = '<span class="badge badge-success">Active</span>';
			} elseif($row['status'] == 'pending') {
				$status = '<span class="badge badge-warning">Pending</span>';
			} else {
				$status = '<span class="badge badge-danger">Deactive</span>';
			}

			$sub_array = array();
			$sub_array[] = $row['name'];
			$sub_array[] = $row['email'];
			$sub_array[] = $row['phone'];
			$sub_array[] = $row['city'];
			$sub_array[] = $status;
			$sub_array[] = $kyc;
			$sub_array[] = my_date_show($row['joindate']);
			$sub_array[] = '<a href="'.base_url('admin/verification/kyc?type=executor&key=').$row['logid'].'"> <button type="button" class="btn btn-link btn-circle"  data-placement="bottom" title="Edit Distributor Information"><i class="fa fa-pencil-alt"></i></button></a>
				<button type="button" class="btn btn-link btn-circle" data-placement="bottom" title="Print Distributor Details"><i class="fa fa-print"></i></button>
				';
			$data[] = $sub_array;
		}



		$output = array(
			"draw"    			=> 	intval($_GET["draw"]),
			"recordsTotal"  	=>  $filtered_rows,
			"recordsFiltered" 	=> 	$this->user->pendingExecutorCount(),
			"data"    			=> 	$data
		);

		echo json_encode($output);
	}



}
