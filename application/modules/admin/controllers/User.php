<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Vite {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('common_model');
	}
	public function index()
	{
		    $data= array();
        $data['page'] ='User';
				$data['users'] = $this->common_model->select('users');
	    	$data['main_content']= $this->load->view('user/add-view',$data, true);
	    	$this->load->view('index',$data);
	}


   public function Delete($id)
		{
	      $data1=['id'=> $id];
	      $this->Common_model->delete($data1,'user_details');
	      redirect(base_url() . 'admin/user/', 'refresh');
	    }

    public function Edit($id)
			{
					if($_POST){
						       $data1=$this->security->xss_clean($_POST);
			             $aim=[
			            'mobile' => $data1['mobile'],
			            'details' => $data1['details'],
			        ];
							//print_r($aim);exit;
			           $this->Common_model->update($aim,'id',$id,'user_details');
						redirect(base_url() . 'admin/user', 'refresh');
			     	}
			}
}
