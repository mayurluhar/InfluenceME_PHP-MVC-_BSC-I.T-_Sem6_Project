<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class postC extends CI_Controller
{
	
	function __construct()  
	{
		parent::__construct();
		$this->load->model("postM","pm");
	}
	/*public function index()
	{
		$this->load->view("userH");
	}*/
	public function registerPost()
	{
		

       
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'], "C:/wamp64/www/influence/resources/shared/images/".$img); //or die("cannot upload image"); 
		$vid = $_FILES['txtURL']['name'];
		copy($_FILES['txtURL']['tmp_name'], "C:/wamp64/final/influence/resources/shared/images/".$vid); //or die("Cannot upload video!");
		$data=array(
			"p_title"=>$this->input->post("txtTitle"),
			"p_des"=>$this->input->post("txtDes"),
			"p_image"=>$img,
			"userID"=>$_SESSION['uid'],
			"videourl" =>$vid
			
		);
		$this->pm->insertPost($data);
		redirect("userC/userHome");
	}
	public function loadPost()
	{		
		$pdata=$this->pm->postData();
		$temp=array(
			"post"=>$pdata
		);
		$this->load->view("userH",$temp);
	}
	public function editPost($bid)
	{
		$data=array("postID"=>$bid);

		$temp=array(
			"postinfo"=>$this->pm->postData($data)
		);
		$this->load->view("editPost.php",$temp);
	}
	public function editBasic($bid)
	{
		$where=array("postID"=>$bid);
		$data=array(
			"p_title"=>$this->input->post('txtTitle'),
			"p_des"=>$this->input->post('txtDes')

		);
		$this->pm->updatePost($data,$where);
		redirect("userC/userHome");
	}
	public function insertComment($pid)
	{
		$data=array(
			"userID"=>$_SESSION['uid'],
			"postID"=>$pid,
			"comment"=>$this->input->post('txtcomment')
		);
		$this->pm->insertComment($data);
		redirect("postC/postInfo/$pid");
	}
	/*public function loadComment($pid)
	{
		$data=array("postID"=>$pid);
		$temp=array(
			
			"commentinfo"=>$this->pm->loadCommentById($data)
		);
		$this->load->view("userC/loadComment",$temp);
	}*/
	public function postInfo($bid)
	{
		$data=array("postID"=>$bid);

		$d2=array(
			"userID"=>$_SESSION['uid'],
			"postID"=>$bid
		);
		$count=count($this->pm->checkLike($d2));
		if ($count==0) {
			$likeStatus="no";
		}
		else
		{
			$likeStatus="yes";
		}
		$d3=array("postID"=>$bid);
		$d4=array(
			"userID"=>$_SESSION['uid'],
			"postID"=>$bid
		);

		$countt=count($this->pm->checksave($d2));
		if ($countt==0) {
			$saveStatus="no";
		}
		else
		{
			$saveStatus="yes";
		}
	
		$temp=array(
			"postinfo"=>$this->pm->postDataByID($data)[0],
			"commentinfo"=>$this->pm->loadCommentById($data),
			"likeStatus"=>$likeStatus,
			"likers"=>$this->pm->postLiker($d3),
			"saveStatus"=>$saveStatus

		);
		$this->load->view("postInfo.php",$temp);
	}
	public function Like($bid)
	{
		$data=array(
			"postID"=>$bid,
			"userID"=>$_SESSION['uid']
		);
		$this->pm->postLike($data);
		redirect("postC/postInfo/$bid");
	}
	public function Unlike($bid)
	{
		$data=array(
			"postID"=>$bid,
			"userID"=>$_SESSION['uid']
		);
		$this->pm->postUnlike($data);
		redirect("postC/postInfo/$bid");
	}
	public function save($bid)
	{
		$data=array(
			"postID"=>$bid,
			"userID"=>$_SESSION['uid']
		);
		$this->pm->postsave($data);
		redirect("postC/postInfo/$bid");
	}
	public function unsave($bid)
	{
		$data=array(
			"postID"=>$bid,
			"userID"=>$_SESSION['uid']
		);
		$this->pm->postUnsave($data);
		redirect("postC/postInfo/$bid");
	}
	
	

}

?>