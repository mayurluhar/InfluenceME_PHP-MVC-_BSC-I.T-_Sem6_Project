<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class userC extends CI_Controller
{

	function __construct()
	{
		parent::__construct(); 
		$this->load->model("userM","um");
		$this->load->model("postM","pm");
		$this->load->model("notificationM","nm");

	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txtEmail','email','required|validemail');
		$this->load->view("userL");
	}
	public function userHome()
	{

		$temp=array(
			"post"=>$this->um->postData(),
			"review"=>$this->um->userReviewCount()
		);
		$this->load->view("userH",$temp);
	}
	public function userBlock()
	{
		$this->load->view('block.php');
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

	public function validateLogin()
	{
		$data1=array(
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd'),
             "status"=>1 
		);
		$loggedData=$this->um->selectLoginData($data1);

		if (count($loggedData)>0) {
		 	redirect("userC/userBlock");
		}
		else
		{
			$data=array(
             "username"=>$this->input->post('txtUname'),
             "password"=>$this->input->post('txtPwd'),
             "status"=>0
		);
		$loggedData=$this->um->selectLoginData($data);

		if (count($loggedData)>0) {
		 	$_SESSION['uid']=$loggedData[0]->userID;
		 	$_SESSION['uname']=$loggedData[0]->username;
		 	$_SESSION['propic']=$loggedData[0]->profilepic;
		 	$_SESSION['utype']="user";

		 	$data3=array("s.userID"=>$_SESSION['uid']);
		$countf=count($this->um->profileCheckLink($data3));
		if ($countf===0) {
			$data1=array(

			"facebook"=>"NULL",
			"twitter"=>"NULL",
			"google"=>"NULL",
			"instagram"=>"NULL",
			"youtube"=>"NULL",
			"userID"=>$_SESSION['uid'],
			"status"=>0

		);
		 	$this->um->scoialL($data1);
		}
		 	

		 	
		 	redirect("userC/userHome");


		}

		else
		{
			$temp=array("loginErr"=>"invalid username");
			$this->load->view("userL",$temp);
		}

		}

		

	}
	public function logout()
	{
		session_destroy();
		redirect("userC/index");
	}

	public function loaduserR()
	{
		$temp=array(
			"state" => $this->um->selectAllState()
		);

		$this->load->view("userR",$temp);
	}

	public function registerUser()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/influence/resources/shared/images/".$img) or die("cannot upload image"); 
		$data=array(
			"username"=>$this->input->post("txtUname"),
			"fullname"=>$this->input->post("txtfname"),
			"password"=>$this->input->post("txtPwd"),
			"emailID"=>$this->input->post("txtEmail"),
			"mobileno"=>$this->input->post("txtMobileno"),
			"cityID"=>$this->input->post("txtCity"),
			"gender"=>$this->input->post("gen"),
			"dob"=>$this->input->post("txtDate"),
			"profilepic"=>$img,
			"bio"=>$this->input->post("txtBio")
			/*"mobileno"=>$this->input->post("txtNum"),
			"cityID"=>$this->input->post("txtcity"),
			"status"=>$this->input->post("txtStatus"),
			"gender"=>$this->input->post("txtGender"),
			"dob"=>$this->input->post("txtDate"),
			"bio"=>$this->input->post("txtBio"),
			"r_date"=>$this->input->post("txtRdate")*/
		);
		$this->um->insertUser($data);
		redirect("userC");
	}
	public function profileP()
	{
		$data1=array("tbluser.userID"=>$_SESSION['uid']);
		$data=array("s.userID"=>$_SESSION['uid']);
		$d2=array("s.followerID"=>$_SESSION['uid']);

		

		
		$temp=array(
			"post"=>$this->um->postDataP($data1),
			"postsave"=>$this->um->postSaver($data),
			"profileSave"=>$this->um->profileSaverByID($data),
			"profilefollow"=>$this->um->profileFollowByID($data),
			"profilefollowing"=>$this->um->profileFollowingByID($d2),
			"uFollowing"=>$this->um->profileFollowingCount($data),
			"uFollow"=>$this->um->profileFollowCount($d2),
			"uPost"=>$this->um->profilePostCount($data),
			"linkData"=>$this->um->LinkData($data),
			"userAbout"=>$this->um->userAboutP($data1)




		);
		$this->load->view("profileP",$temp);
	}
	public function profileOU($id)
	{	
		if ($id==$_SESSION['uid']) {
			
		
			redirect("userC/profileP");
		
		}
		else
		{
			

			$data1=array("userID"=>$id);
		$data=array("u.userID"=>$id);
		$data2=array(
			"p.userID"=>$_SESSION['uid'],
			"userproID"=>$id
		);
		$data3=array(
			"p.userID"=>$_SESSION['uid'],
			"followerID"=>$id
		);
		$data6=array("s.userID"=>$id);
		$d2=array("s.followerID"=>$id);



		$countt=count($this->um->profileCheckSave($data2));
		if ($countt===0) {
			$asaveStatus="no";
		}
		else
		{
			$asaveStatus="yes";
		}
		

		$countf=count($this->um->profileCheckFollow($data3));
		if ($countf===0) {
			$fsaveStatus="no";
		}
		else
		{
			$fsaveStatus="yes";
		}
		$temp=array(
			"userinfo"=>$this->um->postDataOtherUser($data1),
			"postinfo"=>$this->um->postDataOtherUP($data),
			"asaveStatus"=>$asaveStatus,
			"fsaveStatus"=>$fsaveStatus,
			"uFollowing"=>$this->um->profileFollowingCount($data6),
			"uFollow"=>$this->um->profileFollowCount($d2),
			"uPost"=>$this->um->profilePostCount($data6)


		);
		$this->load->view("profileOotherU.php",$temp);
		}

	}
	public function unsave($bid)
	{
		$data=array(
			"postID"=>$bid,
			"userID"=>$_SESSION['uid']
		);
		$this->um->postUnsave($data);
		redirect("userC/profileP/$bid");
	}
	public function profilesave($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"userproID"=>$bid

		);
		$this->um->profileSave($data);
		redirect("userC/profileOU/$bid");
	}
	public function profileunsave($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"userproID"=>$bid
		);
		$this->um->profileUnsave($data);
		redirect("userC/profileOU/$bid");
	}
	public function profilePunsave($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"userproID"=>$bid
		);
		$this->um->profileUnsave($data);
		redirect("userC/profileP/$data");
	}
	public function profileFollow($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"followerID"=>$bid

		);
		$this->um->profilef($data);
		redirect("userC/profileOU/$bid");
	}
	public function profileUnfollow($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"followerID"=>$bid
		);
		$this->um->profileUnf($data);
		redirect("userC/profileOU/$bid");
	}
	public function profileUnfollowPP($bid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"followerID"=>$bid
		);
		$this->um->profileUnf($data);
		redirect("userC/profileP/$data");
	}
	public function profileUnfollowingPP($bid)
	{
		$data=array(
			"followerID"=>$_SESSION['uid'],
			"userID"=>$bid
		);
		$this->um->profileUnf($data);
		redirect("userC/profileP/$data");
	}
	public function profileLink()
	{

		$data=array(

			"facebook"=>$this->input->post("txtFacebook"),
			"twitter"=>$this->input->post("txtTwitter"),
			"google"=>$this->input->post("txtGoogle"),
			"instagram"=>$this->input->post("txtInstagram"),
			"youtube"=>$this->input->post("txtYoutube"),
			"userID"=>$_SESSION['uid']

		);


		$this->um->scoialL($data);
		redirect("userC/pLink");
	}
	public function pLink()
	{

		$data3=array("s.userID"=>$_SESSION['uid']);
		

		$countf=count($this->um->profileCheckLink($data3));
		if ($countf===0) {
			$linkStatus="no";
		}
		else
		{
			$linkStatus="yes";
		}

		$temp=array(
			"linkStatus"=>$linkStatus,
			"linkinfo"=>$this->um->LinkData($data3)


		);
		$this->load->view("profileLinks.php",$temp);
	}
	public function linkUpdate()
	{
		
		$data=array(
			"facebook"=>$this->input->post("txtFacebook"),
			"twitter"=>$this->input->post("txtTwitter"),
			"google"=>$this->input->post("txtGoogle"),
			"instagram"=>$this->input->post("txtInstagram"),
			"youtube"=>$this->input->post("txtYoutube")
			

		);

		$this->um->updateLink($data);
		redirect("userC/pLink");
	}
	public function requirementU()
	{
		$temp=array(
			"requirementAllData"=>$this->um->reDataUser()
		);
		$this->load->view("requirementUser.php",$temp);
	}
	public function requirementById($bid)
	{
		$data=array("requirID"=>$bid);

		$data2=array(
			"s.requirID"=>$bid,
			"s.userID"=>$_SESSION['uid']
		);
		
		$counta=count($this->um->appCount($data2));
		if ($counta===0) {
			$appStatus="no";
		}
		else
		{
			$appStatus="yes";
		}

		$temp=array(
			"requirementByData"=>$this->um->reqDataByID($data),
			"appStatus"=>$appStatus,
			"appByData"=>$this->um->appDataByID($data2)
		);
		$this->load->view("requirementById.php",$temp);
	}
	public function insertApp($bid)
	{
		$data2=array("requirID"=>$bid);

		
		

		$data=array(
			"requirID"=>$bid,
			"userID"=>$_SESSION['uid'],
			"des"=>$this->input->post("txtDes"),

			
		);
		$ridInfo=array("requirID"=>$bid);
		$rInfo=$this->um->reqDataByID($ridInfo);

		$notiinfo=$_SESSION['uname']." Submited on your requirement ".$rInfo[0]->title;
		$ndata=array(
		
			"companyID"=>$rInfo[0]->companyID,
			"notification"=>$notiinfo
		);
		$this->nm->insertNotification($ndata);
		$this->um->insertApp($data);

		redirect("userC/requirementById/$bid");
	}
	public function updateApp($bid)
	{
		$where=array("s.requirID"=>$bid);

		
		

		$data=array(
			"requirID"=>$bid,
			"userID"=>$_SESSION['uid'],
			"des"=>$this->input->post("txtDes"),

			
		);
		$this->um->applicationupdate($data,$where);

		redirect("userC/requirementById/$bid");
	}
	public function displayAllUserNotification()
	{
	

		$temp=array(
			"notification"=>$this->nm->getUserNotification()
			
		);
		/*$ndata=array("status"=>1);
			$where=array("userID"=>$_SESSION['uid']);

		$this->nm->updateUserNotificationStatus($where,$ndata);*/
		$this->load->view("userNoti.php",$temp);
	}
	public function reviewByUserID()
	{
		$data=array("tbluserreview.userID"=>$_SESSION['uid']);
		$temp=array(
			"review"=>$this->um->reviewUserByID($data)
			
		);
		$this->load->view("myUserReview.php",$temp);
	}
	public function updateAppFinal($aid)
	{
		$where=array("appID"=>$aid);

		$data=array(
			
			"status"=>4
			
		);
		$data1=array(
			"status"=>2
		);
		$this->um->lockdeal($where,$data);
		$this->um->userClickAccpet($where,$data1);

		redirect("userC/displayAllUserNotification");
	}
	public function unableReviewButton($aid)
	{
		$where=array("appID"=>$aid);

		$data=array(
			
			"status"=>6
			
		);
		$data1=array(
			"status"=>4
		);
		$this->um->lockdeal($where,$data);
		$this->um->userClickAccpet($where,$data1);

		redirect("company/companyC/applicationData");
	}
	
	public function reportPost($pid,$sid)
	{	
		$where=array("postID"=>$pid);
		
		$data=array(
				
			"status"=>1+$sid
			
		);
	
		$this->um->postStatusBlock($where,$data);
		redirect("userC/userHome");
		
	}
	public function search()
	{
		$temp["post"] = $this->pm->selectPostsByName($this->input->post("txtsearch"));

		$this->load->view('userH',$temp);
	}

}

?>