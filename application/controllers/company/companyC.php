<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class companyC extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("company/companyM","cm");
		$this->load->model("notificationM","nm");
		$this->load->model("userM","um");
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtEmail','email','required|validemail');
		$this->load->view("company/companyL");
	}
	public function companyHome()
	{
		$temp=array(
			"company"=>$this->cm->reDataByID()
		);
		$this->load->view("company/companyH",$temp);
	}
	public function comblock()
	{
		$this->load->view("company/companyblock.php");
	}
	public function validateLogin()
	{
		$data1=array(
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd'),
             "status"=>1 
		);
		$loggedData=$this->cm->selectLoginData($data1);
		if (count($loggedData)>0) {
			redirect("company/companyC/comblock");
		}
		else
		{
			$data=array(
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd'),
              "status"=>0
		);
		$loggedData=$this->cm->selectLoginData($data);

		if (count($loggedData)>0) {
		 	$_SESSION['uid']=$loggedData[0]->companyID;
		 	$_SESSION['uname']=$loggedData[0]->username;
		 	$_SESSION['propic']=$loggedData[0]->profilepic;
		 	$_SESSION['utype']="company";
		 	redirect("company/companyC/companyHome");


		}
		else
		{
			$temp=array("loginErr"=>"invalid username");
			$this->load->view("company/companyL",$temp);
		}
		}


		

	}
	public function logout()
	{
		session_destroy();
		redirect("company/companyC/index");
	}
	public function loaduserR()
	{
		$temp=array(
			"state" => $this->um->selectAllState()
		);

		$this->load->view("company/companyR",$temp);
	}
	public function loadCityByStateId($cid)
	{
		$cities = $this->um->getCities($cid);
		// print_r($cities);
		$str = "<option value=-1>select a city</option>";

		foreach ($cities as $s) {
				$str .= "<option value='$s->cityID'>$s->city_name</option>";
		}
		print_r($str);
	}

	public function registerUser()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/influence/resources/shared/images/".$img) or die("cannot upload image"); 
		$data=array(
			"com_name"=>$this->input->post("txtCname"),
			"username"=>$this->input->post("txtUname"),
			"password"=>$this->input->post("txtPwd"),
			"profilepic"=>$img,
			"contactno"=>$this->input->post("txtMobileno"),
			"emailID"=>$this->input->post("txtEmail"),
			"cityID"=>$this->input->post("txtCity"),
			"description"=>$this->input->post("txtDes")
			
			
			
			
		);
		$this->cm->insertUser($data);
		redirect("company/companyC");
	}
	public function registerPost()
	{
		 
		$data=array(
			"title"=>$this->input->post("txtTitle"),
			"description"=>$this->input->post("txtDes"),
			"budget"=>$this->input->post("txtBud"),
			"companyID"=>$_SESSION['uid']
			
		);
		$this->cm->insertRe($data);
		redirect("company/companyC/companyHome");
	}
	public function companyProfile()
	{
	
		$this->load->view("company/companypro");
	}
	public function applicationData()
	{
		$data=array("companyID"=>$_SESSION['uid']);
		

		$temp=array(
			"requirementBox"=>$this->cm->selectRequir($data),
			//"applicationBox"=>$this->cm->selectapplication($data)
			
		);

		$this->load->view("company/appointmentA.php",$temp);
	}
	public function applicationDataById($aid)
	{
		$data=array("companyID"=>$_SESSION['uid']);
		$where=array("s.requirID"=>$aid);

		$temp=array(
			"requirementBox"=>$this->cm->selectRequir($data),
			"applicationBox"=>$this->cm->selectapplication($data1,$where)
		);

		$this->load->view("company/appointmentA.php",$temp);
	}
	public function displayAllNotification()
	{
	

		$temp=array(
			"notification"=>$this->nm->getNotification()
			
		);
		$ndata=array("status"=>1);
			$where=array("companyID"=>$_SESSION['uid']);

		$this->nm->updateNotificationStatus($where,$ndata);
		$this->load->view("company/companyNoti.php",$temp);
	}
	public function insertApproval($nid)
	{
		$ridInfo=array("appID"=>$nid);
		$rInfo=$this->cm->userApprovalByID($ridInfo);

		$notiinfo=$_SESSION['uname']." Company Approve Your Application For ".$rInfo[0]->title;
		$ndata=array(
		
			"userID"=>$rInfo[0]->userID,
			"notification"=>$notiinfo,
			"appID"=>$nid
		);
		$adata=array(
			"companyID"=>$_SESSION['uid'],
			"userID"=>$rInfo[0]->userID,
			"appID"=>$nid

			
		);
		$this->nm->insertApproveRequest($adata);
		$this->nm->insertuserNotification($ndata);
		

		redirect("company/companyC/applicationData");
	}
	public function insertuserReview($uid,$aid)
	{

		$where=array("appID"=>$aid);
		$data = array(
			"userID" => $uid,
			"companyID" =>$_SESSION['uid'],
			"rating" => $this->input->post("rate"),
			"review" => $this->input->post("txtReview")
			
			
		);
		$data2= array(
			"status"=>7
			
			
		);

		$this->um->lockdeal($where,$data2);
		$this->cm->insertuserReview($data);
		
		redirect("company/companyC/applicationData");
	}
	public function updateAppFinal($aid)
	{
		$where=array("appID"=>$aid);

		$data=array(
			
			"status"=>5
			
		);
		$data1=array(
			"status"=>3
		);
		$this->um->lockdeal($where,$data);
		$this->um->userClickAccpet($where,$data1);

		redirect("company/companyC/applicationData");
	}
	public function profileOU($id)
	{	
		$data1=array("companyID"=>$id);
		$data=array("u.companyID"=>$id);

		$temp=array(
			"companyinfo"=>$this->cm->postDataOtherCompany($data1),
			"requirementinfo"=>$this->cm->postDataOtherCP($data)
		);
		$this->load->view("company/profileOotherC.php",$temp);
	}
	public function companyPro()
	{
		$data1=array("tblrequirement.companyID"=>$_SESSION['uid']);

		$temp=array(
			"requirement"=>$this->cm->postDataP($data1)
		);
		$this->load->view("company/companyPro.php",$temp);
	}
	public function editRequirement($bid)
	{
		$data=array("requirID"=>$bid);

		$temp=array(
			"requirementinfo"=>$this->cm->postData($data)
		);
		$this->load->view("company/editRequirement.php",$temp);
	}
	public function editBasic($bid)
	{
		$where=array("requirID"=>$bid);
		$data=array(
			"title"=>$this->input->post('txtTitle'),
			"description"=>$this->input->post('txtDes'),
			"budget"=>$this->input->post('txtbud')

		);
		$this->cm->updatePost($data,$where);
		redirect("company/companyC/companyHome");
	}


}

?>