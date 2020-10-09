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
	// Verification customer account
	public function checkCustomer($email, $password)
        {
            
            $this->db->where("register_email", $email);
            $query = $this->db->get('register');

            if ($query->num_rows() == 1)
            {
                foreach($query->result() as $row)
                {
                    if ($email === $decryptKey = $this->encryption->decrypt($row->register_password))
                    {
                        $this->session->set_userdata('admin', $query->result_array());
                    }
                    else {
                        return 'Mauvais login ou mot de passe';
                    }
                }
            }
            else {
                return 'Mauvais login ou mot de passe';
            }
        }
}
