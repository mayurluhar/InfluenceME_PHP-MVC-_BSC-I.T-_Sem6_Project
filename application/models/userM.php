<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class userM extends CI_Model
{
	
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tbluser")->result();
	}
	public function insertUser($data)
	{
		return $this->db->insert("tbluser",$data);
	}
	public function postData()
	{
		  $this->db->select('*');
	  $this->db->from('tbluser');
	  $this->db->join('tblpost','tblpost.userID = tbluser.userID');
	  $this->db->order_by('postID','desc');
	  return $this->db->get()->result();
	 }
	public function postDataP($data1)
	{
		  $this->db->select('*');
	  $this->db->from('tblpost');
	  $this->db->join('tbluser','tblpost.userID = tbluser.userID');
	  $this->db->join('tblcity','tblcity.cityID = tbluser.cityID');
	  $this->db->join('tblstate','tblcity.stateID = tblstate.stateID');


	  $this->db->order_by('postID','desc');
	  return $this->db->where($data1)->get()->result();
	 }
	 public function userAboutP($data1)
	{
		  $this->db->select('*');
	  $this->db->from('tbluser');
	  $this->db->join('tblcity','tblcity.cityID = tbluser.cityID');
	  $this->db->join('sociallink','sociallink.userID = tbluser.userID');
	  $this->db->join('tblstate','tblcity.stateID = tblstate.stateID');
	 
	  return $this->db->where($data1)->get()->result();
	 }
	 public function postDataOtherUser($data1)
	{
		return $this->db->where($data1)->get("tbluser")->result()[0];

	}
	public function postDataOtherUP($data)
	{
		 $this->db->select('*');
	  $this->db->from('tbluser u');
	  $this->db->join('tblpost p','u.userID = p.userID');
	 return  $this->db->where($data)->get()->result();
		

	}
	public function postSaver($data)
	{
		$this->db->select('*');
	  $this->db->from('tbluser u');
	  $this->db->join('tblpost p','p.userID = u.userID');
	 $this->db->join('tblpostsave s','s.postID = p.postID');
	  return $this->db->where($data)->get()->result();

	}
	public function postUnsave($data)
	{
		return $this->db->delete("tblpostsave",$data);
	}
	public function profileSave($data)
	{
		return $this->db->insert("tblprofilesave",$data);
	}
	public function profileUnsave($data)
	{
		return $this->db->delete("tblprofilesave",$data);
	}
	public function profileCheckSave($data)
	{
		return $this->db->where($data)->get("tblprofilesave p")->result();
	}
	public function profileSaverByID($data)
	{
		$this->db->select('*');
	  $this->db->from('tbluser u');
	  $this->db->join('tblprofilesave s','s.userproID = u.userID');
	  return $this->db->where($data)->get()->result();

	}
	public function profilef($data)
	{
		return $this->db->insert("tblfollow",$data);
	}
	public function profileUnf($data)
	{
		return $this->db->delete("tblfollow",$data);
	}
	public function profileCheckFollow($data)
	{
		return $this->db->where($data)->get("tblfollow p")->result();
	}
	public function profileFollowByID($data)
	{
		$this->db->select('*');
	  $this->db->from('tbluser u');
	  $this->db->join('tblfollow s','s.followerID = u.userID');
	  return $this->db->where($data)->get()->result();

	}
	public function profileFollowingByID($data)
	{
		$this->db->select('*');
	  $this->db->from('tblfollow s');
	  $this->db->join('tbluser u','s.userID = u.userID');
	  return $this->db->where($data)->get()->result();

	}
	public function profileFollowingCount($data)
	{
		return $this->db->where($data)->get("tblfollow s")->num_rows();
		

	}
	public function profileFollowCount($data)
	{
		return $this->db->where($data)->get("tblfollow s")->num_rows();
		

	}
	public function profilePostCount($data)
	{
		return $this->db->where($data)->get("tblpost s")->num_rows();
		

	}
	public function scoialL($data)
	{
		return $this->db->insert("sociallink",$data);
	}
	public function profileCheckLink($data)
	{
		return $this->db->where($data)->get("sociallink s")->result();
	}

	public function LinkData($data)
	{
		 return $this->db->where($data)->get("sociallink s")->result()[0];
		
	}
	public function updateLink($newdata)
	{
		$where=array("userID"=>$_SESSION['uid']);
		return $this->db->where($where)->update("sociallink",$newdata);
	}
	public function reDataUser()
	{
		  $this->db->select('*');
	  $this->db->from('tblcompany');
	  $this->db->join('tblrequirement','tblrequirement.companyID = tblcompany.companyID');
	  $this->db->order_by("requirID",'desc');
	  return $this->db->get()->result();
	 }
	 public function reqDataByID($data)
	{
		  $this->db->select('*');
	  $this->db->from('tblcompany');
	  $this->db->join('tblrequirement','tblrequirement.companyID = tblcompany.companyID');
	  return $this->db->where($data)->get()->result();
	 }
	  public function appDataByID($data)
	{
		return $this->db->where($data)->get("tblapplication s")->result()[0];
	
	 }
	 public function insertApp($data)
	 {
	 	return $this->db->insert("tblapplication",$data);
	 }
	 public function applicationupdate($newdata,$where)
	{
		
		return $this->db->where($where)->update("tblapplication s",$newdata);
	}
	public function appCount($data)
	{
		return $this->db->where($data)->get("tblapplication s")->result();
		

	}
	 public function reviewUserByID($data)
	{
		  $this->db->select('*');
	  $this->db->from('tblcompany');
	  $this->db->join('tbluserreview','tbluserreview.companyID = tblcompany.companyID');
	  return $this->db->where($data)->get()->result();
	
	 }
	  public function lockdeal($where,$data)
	{
		return $this->db->where($where)->update("tblapplication",$data);	
	}
	 public function userClickAccpet($where,$data1)
	{
		return $this->db->where($where)->update("tblusernotification",$data1);	
	}
	public function finalDealByNoti($where,$data1)
	{
		return $this->db->where($where)->update("tblusernotification",$data1);	
	}
	public function userReviewCount()
	{
			$data=array("userID"=>$_SESSION['uid']);
			return $this->db->where($data)->get("tbluserreview")->num_rows();

		

	}
	 public function postStatusBlock($where,$data)
	{
		return $this->db->where($where)->update("tblpost",$data);	
	}
	public function selectAllState()
	{
				return $this->db->get("tblstate")->result();

		//return $this->db->where($data)->get("tblcity")->result();
	}

	public function getCities($sid) {
		return $this->db->where("stateID", $sid)->from("tblcity")->get()->result();
	}

}

?>