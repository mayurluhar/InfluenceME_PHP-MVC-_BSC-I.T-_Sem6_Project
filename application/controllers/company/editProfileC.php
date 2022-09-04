<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class editProfileC extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("company/editProfileM","ep");
	}

	/*public function loadMyProfile()
	{
		$data=array(
			"userid"=>$_SESSION['uid']
		);
		$temp=array(
			"userinfo"=>$this->ep->selectUserInfo($data)
		);

		
		$this->load->view("editProfile.php",$temp);
	}*/
	

	public function editProfile()
	{
		$data=array(
			"companyid"=>$_SESSION['uid']
		);
		$temp=array(
			"userinfo"=>$this->ep->selectUserInfo($data)
		);
		
		$this->load->view("company/editProfile.php",$temp);
	}
	public function editBasic()
	{
		$data=array(
			"com_name"=>$this->input->post('txtCname'),
			"username"=>$this->input->post('txtUname'),
			"emailID"=>$this->input->post('txtEmail'),
			"contactno"=>$this->input->post('txtContactno'),
			"description"=>$this->input->post('txtDes')

		);

		$_SESSION['uname']=$this->input->post('txtUname');
		
		$this->ep->updateProfile($data);
		redirect("company/editProfileC/editProfile");



	}
	public function editImage()
	{
		
		if($_FILES['fup']['name']!="")
		{
			$img=$_FILES['fup']['name'];
			copy($_FILES['fup']['tmp_name'],"C:/wamp64/www/influence/resources/shared/images/".$img) or die("cannot upload image");
			$data=array(
				"profilepic"=>$img
			);
			$_SESSION['propic']=$img;
			$this->ep->updateProfile($data);
		}
		redirect("company/editProfileC/editProfile");
	}

	public function editPassword()
	{
		$opwd=$this->input->post('txtOpwd');
		$npwd=$this->input->post('txtNpwd');
		$cpwd=$this->input->post('txtCpwd');
		    $data=array(
			   "companyid"=>$_SESSION['uid']
		    );
		$uinfo=$this->ep->selectUserInfo($data);
		if($npwd!=$cpwd)
		{
			
		    $temp=array(
			   "userinfo"=>$uinfo,
			   "errMsg"=>"password and cnfrm password dont match"
		    );
			$this->load->view("company/editProfile",$temp);	
		}
		else
		{
			if($opwd!=$uinfo->password)
			{
				$temp=array(
			       "userinfo"=>$uinfo,
			       "errMsg"=>"Invalid old password"
		        );
			    $this->load->view("company/editProfile",$temp);	
			}
			else
			{
				$data=array(
			       "password"=>$npwd
		        );

		        $this->ep->updateProfile($data);
				$temp=array(
			       "userinfo"=>$uinfo,
			       "errMsg"=>"Password changed"
		        );
			    $this->load->view("company/editProfile",$temp);				
			}
		}
	}
}

?>