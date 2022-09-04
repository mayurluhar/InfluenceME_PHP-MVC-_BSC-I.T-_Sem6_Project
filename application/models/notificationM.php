<?php  

class notificationM extends CI_Model
{
	
	public function getNotification()
	{
		/*$data=array("companyID"=>$_SESSION['uid']);
		 $this->db->select('n');
	  $this->db->from('tblnotification n');
	  $this->db->join('tblcompany c','c.companyID = n.companyID');*/
	  $data=array("companyID"=>$_SESSION['uid']);
	  return $this->db->where($data)->get("tblnotification")->result();
	}
	public function insertNotification($data)
	{
		$this->db->insert("tblnotification",$data);
	}
	public function updateNotificationStatus($where,$ndata)
	{
		$this->db->where($where)->update("tblnotification",$ndata);
	}
	public function getUserNotification()
	{
		/*$data=array("companyID"=>$_SESSION['uid']);
		 $this->db->select('n');
	  $this->db->from('tblnotification n');
	  $this->db->join('tblcompany c','c.companyID = n.companyID');*/


	  $data=array("unt.userID"=>$_SESSION['uid']);
	  $this->db->select('*');
	  $this->db->from('tblapplication a');
	  $this->db->join('tblusernotification unt','unt.appID = a.appID');
	  return $this->db->where($data)->get()->result();
	  /*return $this->db->where($data)->get("tblusernotification")->result();*/
	}
	public function insertUserNotification($data)
	{
		$this->db->insert("tblusernotification",$data);
	}
	public function insertApproveRequest($data)
	 {
	 	return $this->db->insert("tblapprovedeal",$data);
	 }
	public function updateUserNotificationStatus($where,$ndata)
	{
		$this->db->where($where)->update("tblusernotification",$ndata);
	}
}

?>