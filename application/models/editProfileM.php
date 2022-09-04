<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class editProfileM extends CI_Model
{
	public function selectUserInfo($data)
	{
		return $this->db->where($data)->get("tbluser")->result()[0];
	}

	public function updateProfile($newdata)
	{
		$where=array("userid"=>$_SESSION['uid']);
		return $this->db->where($where)->update("tbluser",$newdata);
	}
}

?>