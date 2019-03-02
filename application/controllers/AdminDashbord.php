<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashbord extends CI_Controller {

    public function __construct(){
		parent::__construct();
		// use Model
		$this->load->model('AdminModel');
		
		// session
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

	public function SaveCatagory()
	{
		$this->AdminModel->save_catagory();
		$data=array();
		$data['msg']="Data Added Successfully";
		$this->session->set_userdata($data);
		redirect ('/Admin-Add-Catagory/');

		
	}

	public function ManageCatagory(){
        $this->load->model('AdminModel');
		$data=array();
		$data['allcatagory']=$this->AdminModel->ShowAllCatagory();
		$data['AdminContain']=$this->load->view('admin/ManageCatagory',$data,true);
		$this->load->view('admin/master',$data);

	}

	public function UnpublishCatagory($id){
		$this->AdminModel->UnpublishCatagory($id);
		redirect ('/Manage-Catagory');
		
	}
	public function PublishCatagory($id){
		$this->AdminModel->PublishCatagory($id);
		redirect ('/Manage-Catagory');
		
	}
	public function DeleteCatagory($id){
		$this->AdminModel->DeleteCatagory($id);
		redirect ('/Manage-Catagory');
		
	}
	


}
