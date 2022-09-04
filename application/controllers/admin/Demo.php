<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$_SESSION['aname'])
		{
			redirect("admin/login");
		}
	}
	public function index()
	{
		$this->load->view("admin/index");
	}
	
}

?>