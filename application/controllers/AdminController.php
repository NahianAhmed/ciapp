<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function index()
	{
		
		$this->load->view('admin/login');
	}


	public function VerifyAdmin()
	{
		$user_name=$this->input->post('name',true);
		$user_pass=$this->input->post('password',true);

		
	
		if($user_name=='admin'&&$user_pass=='admin'){
				$admin=array();
				$admin['name']=$user_name;
				$this->session->set_userdata($admin);
			redirect('/Admin-Dashbord');
		}
	else
	$msg=array();
	$msg['msg']="User Name or Password invalid";
	$this->session->set_userdata($msg);
	redirect('/Admin');
		
	}

	public function logout(){
		$this->session->unset_userdata('name');
		$msg=array();
	    $msg['msg']="Logout Successfully";
		$this->session->set_userdata($msg);
		redirect('/Admin');
        
	}


}
