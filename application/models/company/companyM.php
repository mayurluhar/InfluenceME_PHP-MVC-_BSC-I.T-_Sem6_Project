<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class companyM extends CI_Model
{
	
	public function selectLoginData($data)
	{
		return $this->db->where($data)->get("tblcompany")->result();
	}
	public function insertUser($data)
	{
		return $this->db->insert("tblcompany",$data);
	}
	public function insertRe($data)
	{
		return $this->db->insert("tblrequirement",$data);
	}
	public function reDataByID()
	{
		  $this->db->select('*');
	  $this->db->from('tblcompany');
	  $this->db->join('tblrequirement','tblrequirement.companyID = tblcompany.companyID');
	  $this->db->order_by("requirID",'desc');
	  return $this->db->get()->result();
	 }
	 public function selectRequir($data)
	{
		/*return $this->db->where($data)->get("tblrequirement")->result();*/
		
		$this->db->select('*,tblapplication.status');
	  $this->db->from('tblapplication');
	  $this->db->join('tbluser','tbluser.userID = tblapplication.userID');
	  $this->db->join('tblrequirement','tblrequirement.requirID = tblapplication.requirID');
	  return $this->db->where($data)->get()->result();			
	}
	 public function selectapplication($data)
	{
		
		return $this->db->where($data)->get("tblapprovedeal")->result();
	}
	 public function userApprovalByID($data)
	{
		  $this->db->select('*');
	  $this->db->from('tblapplication a');
	  $this->db->join('tblrequirement r','r.requirID = a.requirID');
	  return $this->db->where($data)->get()->result();
	 }
	 public function insertuserReview($data)
	 {
	 	return $this->db->insert("tbluserreview",$data);
	 }
	 
	 public function dealstatus($data)
	{
		return $this->db->where($data)->get("tblusernotification")->result();
	}
	public function selectAllState()
	{
				return $this->db->get("tblstate")->result();

		//return $this->db->where($data)->get("tblcity")->result();
	}

	public function getCities($sid) {
		return $this->db->where("stateID", $sid)->from("tblcity")->get()->result();
	}
	public function postDataOtherCompany($data1)
	{
		return $this->db->where($data1)->get("tblcompany")->result()[0];
	}
	public function postDataOtherCP($data)
	{
	  $this->db->select('*');
	  $this->db->from('tblcompany u');
	  $this->db->join('tblrequirement p','u.companyID = p.companyID');
	  return  $this->db->where($data)->get()->result();
	}
	public function postDataP($data1)
	{
		$this->db->select('*');
	  $this->db->from('tblcompany');
	  $this->db->join('tblrequirement','tblrequirement.companyID = tblcompany.companyID');
	  $this->db->order_by('requirID','desc');
	   return $this->db->where($data1)->get()->result();
	  //return $this->db->get()->result();
	}
	public function postData($data)
	{
		return $this->db->where($data)->get("tblrequirement")->result()[0];
	  }

	public function insertPost($data)
	{
		return $this->db->insert("tblrequirement",$data);
	}
	
	public function updatePost($newdata,$where)
	{
		return $this->db->where($where)->update("tblrequirement",$newdata);
	}
	

}

?>