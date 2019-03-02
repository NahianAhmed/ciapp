<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashbord extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if($this->session->userdata('name')==null){
           redirect('/Admin');
		}

	}
	

    public function index()
	{
		$data=array();
		$data['AdminContain']=$this->load->view('admin/home','',true);
		$this->load->view('admin/master',$data);
	}

	public function AddCatagory()
	{
		$data=array();
		$data['AdminContain']=$this->load->view('admin/add_catagory','',true);
		$this->load->view('admin/master',$data);
	}
	


}
