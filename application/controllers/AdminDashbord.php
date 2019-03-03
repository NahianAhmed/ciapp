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
       // $this->load->library('form_validation');

		$this->form_validation->set_rules('catagory_name', 'Catagory Name', 'required');
		$this->form_validation->set_rules('catagory_description', 'Catagory Description', 'required');
		$this->form_validation->set_rules('publication_status', 'publication Status', 'required');
		

		if($this->form_validation->run() == FALSE){
			//echo validation_errors();
			//$this->AddCatagory();
			$this->session->set_flashdata('error', validation_errors());
			redirect('/Admin-Add-Catagory');

			
		}


		else{
		   
			
		$this->AdminModel->save_catagory();
		$data=array();
		$data['msg']="Data Added Successfully";
		$this->session->set_userdata($data);
		redirect ('/Admin-Add-Catagory/');
		
	}


		

		
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


public function mail(){
  

$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'heartsoft420@gmail.com',
    'smtp_pass' => 'S01714415122',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('nahianahmedcse@gmail.com');
$this->email->from('heartsoft420@gmail.com','test');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email
$this->email->send();
echo $this->email->print_debugger();




	}
	


}
