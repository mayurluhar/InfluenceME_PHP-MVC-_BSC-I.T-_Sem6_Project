<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class postM extends CI_Model
{
	public function postData($data)
	{
		return $this->db->where($data)->get("tblpost")->result()[0];
	}

	public function insertPost($data)
	{
		return $this->db->insert("tblpost",$data);
	}
	
	 public function insertComment($data)
	{
		return $this->db->insert("tblcomment",$data);
	}
	public function loadCommentById($data)
	{
		 $this->db->select('*');
	  $this->db->from('tblcomment');
	  $this->db->join('tbluser','tblcomment.userID = tbluser.userID');
	  return $this->db->where($data)->get()->result();
	}
	public function updatePost($newdata,$where)
	{
		return $this->db->where($where)->update("tblpost",$newdata);
	}
	public function postDataByID($data)
	{
		  $this->db->select('*');
	  $this->db->from('tblpost');
	  $this->db->join('tbluser','tblpost.userID = tbluser.userID');
	  return $this->db->where($data)->get()->result();
	 }
	 public function postLike($data)
	{
		return $this->db->insert("tblpostlike",$data);
	}
	public function postUnlike($data)
	{
		return $this->db->delete("tblpostlike",$data);
	}
	public function checkLike($data)
	{
		return $this->db->where($data)->get("tblpostlike")->result();
	}
	public function postLiker($data)
	{
		return $this->db->where($data)->from("tblpostlike")->join("tbluser","tbluser.userID=tblpostlike.userID")->get()->result();
	}
	public function postsave($data)
	{
		return $this->db->insert("tblpostsave",$data);
	}
	public function postUnsave($data)
	{
		return $this->db->delete("tblpostsave",$data);
	}
	public function checksave($data)
	{
		return $this->db->where($data)->get("tblpostsave")->result();
	}
	public function selectPostsByName($name)
	{
		return $this->db->select("*")->like("u.username",$name)->from("tblpost p")->join("tbluser u", "u.userID = p.userID")->get()->result();
	}
	
}

?>