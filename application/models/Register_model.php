<?php
class Register_model extends CI_Model
{
	// Registration
	function insert($data)
	{
		$this->db->insert('register', $data);
		return $this->db->insert_id();
	}

	// Verification email and key
	function verify_email($key)
	{
		$this->db->where('register_verification_key', $key);
		$this->db->where('register_is_email_verified', 'no');
		$query = $this->db->get('register');
		if($query->Num_rows() > 0)
		{
			$data = array(
				'register_is_email_verified' => 'yes'
			);
			$this->db->where('register_verification_key', $key);
			$this->db->update('register', $data);
			return true;
		}
		else
		{
			return false;
		}
	}
}
