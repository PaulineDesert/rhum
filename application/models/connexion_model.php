<?php
class Connexion_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function checkLogin($login, $password)
        {
            $this->load->helper('url');

            
                $query = $this->db
                    ->select("*")
                    ->from("admin")
                    ->where("admin_pseudo", $login)
                    ->get();

                if ($query->num_rows() != 1)    throw new UnexpectedValueException("Mauvais login ou mot de passe1");

                $row = $query->row();
                if (!password_verify($password, $row->hash)) throw new UnexpectedValueException("Mauvais login ou mot de passe2");

                echo "Vous êtes identifié";

            

            // return $this->db->insert('news', $data);
        }
}