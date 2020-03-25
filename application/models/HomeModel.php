<?php

class HomeModel extends CI_Model
{

  public function user_auth($data)
  {
    $r = $this->db->select('full_name,phone,email,profile_pic')->from(USERS)->where($data)->get()->row();
		return $r;
  }

  public function add_user($data)
  {
  	$this->db->insert(USERS,$data);
  	return true;	
  }


}
