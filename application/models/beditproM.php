<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageProfileM extends CI_Model
{
	public function selectUserInfo($data)
	{
		 return $this->db->where($data)->get("table_user u")->result()[0];
	}

	public function updateProfile($newdata)
	{
		$where=array("Userid"=>$_SESSION['uid']);
		return $this->db->where($where)->update("table_user",$newdata);
	}
}
?>