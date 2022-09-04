<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/LoginM","lm");
	}
	public function index()
	{
		$this->load->view("admin/Login");
	}
	public function validateLogin()
	{
		$data=array(
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd')
		);
		$loggedData=$this->lm->selectLoginData($data);

		if (count($loggedData)>0) {
		 	$_SESSION['aid']=$loggedData[0]->adminid;
		 	$_SESSION['aname']=$loggedData[0]->username;

		 	redirect("admin/Demo");


		}
		else
		{
			$temp=array("loginErr"=>"invalid username");
			$this->load->view("admin/login",$temp);
		}
	}
	public function logout()
	{
		session_destroy();
		redirect("admin/login");
	}

	
}

?>