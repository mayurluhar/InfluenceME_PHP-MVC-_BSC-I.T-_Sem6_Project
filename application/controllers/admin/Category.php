<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Category extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/CategoryM","cm");
	}
	public function index()
	{
		$temp=array(
			"users"=>$this->cm->userAllData(),

		);
		/*$data['users'] = $this->cm->userAllData();*/
		$this->load->view("admin/userData",$temp);
	}
	public function companyData()
	{
		$temp=array(
			"company"=>$this->cm->companyAllData()
		);
		$this->load->view("admin/Company",$temp);
	}
	public function userBlock($uid)
	{
		$where=array("userID"=>$uid);

		$data=array(
			
			"status"=>1
			
		);
		$this->cm->blockUser($where,$data);

		redirect("admin/Category/");
	}
	public function userUnblock($uid)
	{
		$where=array("userID"=>$uid);

		$data=array(
			
			"status"=>0
			
		);
		$this->cm->blockUser($where,$data);

		redirect("admin/Category/");
	}
	public function companyBlock($uid)
	{
		$where=array("companyID"=>$uid);

		$data=array(
			
			"status"=>1
			
		);
		$this->cm->blockCompany($where,$data);

		redirect("admin/Category/companyData");
	}
	public function companyUnblock($uid)
	{
		$where=array("companyID"=>$uid);

		$data=array(
			
			"status"=>0
			
		);
		$this->cm->blockCompany($where,$data);

		redirect("admin/Category/companyData");
	}
	public function postAllData()
	{
		$temp=array(
			"post"=>$this->cm->postData()
		);	
		$this->load->view("admin/postData.php",$temp);
	}
	public function HidePost($pid)
	{	
		$where=array("tblpost.postID"=>$pid);
		$data=array(
			"status"=>78960
		);

		$this->cm->postDataHideByID($where,$data);
			
		redirect("admin/Category/postAllData");
	}
	public function unHidePost($pid)
	{	
		$where=array("postID"=>$pid);
		$data=array(
			"status"=>0
		);

		$this->cm->postDataHideByID($where,$data);
			
		redirect("admin/Category/postAllData");
	}
	public function allState()
	{
		$temp=array(
			"states"=>$this->cm->selectAllState()
		);
		$this->load->view("admin/allStateData.php",$temp);
	}
	public function loadAddstate()
	{
		$this->load->view("admin/addState.php");
	}
	public function addState()
	{
		$data=array("state_name"=>$this->input->post('txtstate'));
		$this->cm->insertState($data);
		redirect("admin/Category/allState");
	}
	public function removeState($id)
	{
		$data=array("stateID"=>$id);
		$this->cm->deleteState($data);
		redirect("admin/Category/allState");
	}
	public function loadAllSubCity($id)
	{
		$data=array("sc.stateID"=>$id);
		$temp=array(
			"subcity"=>$this->cm->selectSubCityByStateId($data),
			"stateID"=>$id
		);
		$this->load->view("admin/allSubCity.php",$temp);
	}
	public function loadAddCity($cid)
	{
		$temp=array("stateID"=>$cid);
		$this->load->view("admin/addSubCity.php",$temp);
	}

	public function addSubCity($cid)
	{
		$data=array(
			"city_name"=>$this->input->post('txtcity'),
			"stateID"=>$cid
		);
		$this->cm->insertSubCity($data);
		redirect("admin/Category/loadAllSubCity/".$cid);
	}
	public function removeSubCity($sid,$cid)
	{
		$data=array("cityID"=>$sid);
		$this->cm->deleteSubCity($data);
		redirect("admin/Category/loadAllSubCity/$cid");
	}

}
?>