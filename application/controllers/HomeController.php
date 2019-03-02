<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index()
	{
		$data= array();
		$data['main_contain']=$this->load->view('pages/home_contain','',true) ;
		$this->load->view('master',$data);
	}


	public function CheckOut(){
		$data=array();
		$data['main_contain']=$this->load->view('pages/checkout','',true);
		$this->load->view('master',$data);
	}


}
