<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CategoryM extends CI_Model
{
	
	public function userAllData()
	{	
	  /* return $this->db->get("tbluser")->result();*/

	  $this->db->select('*');
	  $this->db->from('tblcity');
	  $this->db->join('tbluser','tblcity.cityID = tbluser.cityID');
	  return $this->db->get()->result();

	}
	
	public function companyAllData()
	{
		return $this->db->get("tblcompany")->result();
	}
	public function blockUser($where,$data)
	{
		return $this->db->where($where)->update("tbluser",$data);	
	}
	public function blockCompany($where,$data)
	{
		return $this->db->where($where)->update("tblcompany",$data);	
	}
	public function postData()
	{
		return $this->db->get("tblpost")->result();
	}
	public function postDataHideByID($where,$data)
	{
		return $this->db->where($where)->update("tblpost",$data);	

	}
	public function selectAllState()
	{
		return $this->db->get("tblstate")->result();
	}
	public function insertState($data)
	{
		return $this->db->insert("tblstate",$data);
	}
	public function deleteState($data)
	{
		return $this->db->delete("tblstate",$data);
	}
	public function selectSubCityByStateId($data)
	{
		return $this->db->where($data)->from("tblcity sc")->join("tblstate c","c.stateID=sc.stateID")->get()->result();
	}
	public function insertSubCity($data)
	{
		return $this->db->insert("tblcity",$data);
	}
	public function deleteSubCity($data)
	{
		return $this->db->delete("tblcity",$data);
	}
}


?>