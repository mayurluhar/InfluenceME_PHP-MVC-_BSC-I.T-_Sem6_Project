<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class editProfileM extends CI_Model
{
	public function selectUserInfo($data)
	{
		return $this->db->where($data)->get("tblcompany")->result()[0];
	}

	public function updateProfile($newdata)
	{
		$where=array("companyid"=>$_SESSION['uid']);
		return $this->db->where($where)->update("tblcompany",$newdata);
	}
}

?>