<?php
class Connexion_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function checkLogin($login, $password)
        {
            
            $this->db->where("admin_pseudo", $login);
            $query = $this->db->get('admin');

            if ($query->num_rows() == 1)
            {
                foreach($query->result() as $row)
                {
                    if (password_verify($password, $row->admin_password))
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