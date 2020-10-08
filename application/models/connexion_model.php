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
                    var_dump(password_verify($password, $row->admin_password));
                    $decrypt_password = $this->encrypt->decode($row->admin_password);
                    var_dump($decrypt_password);
                    if ($password == $decrypt_password)
                    {
                        $this->session->set_userdata('user', $query->result_array());
                        var_dump($_SESSION);
                    }
                    else {
                        return 'Mauvais login ou mot de passe 2';
                    }
                }
            }
            else {
                return 'Mauvais login ou mot de passe 1';
            }
            
                // $query = $this->db
                //     ->select("*")
                //     ->from("admin")
                //     ->where("admin_pseudo", $login)
                //     ->get();

                // if ($query->num_rows() != 1)    throw new UnexpectedValueException("Mauvais login ou mot de passe1");

                // $row = $query->row();
                // if (!password_verify($password, $row->hash)) throw new UnexpectedValueException("Mauvais login ou mot de passe2");

                // echo "Vous êtes identifié";

            

            // return $this->db->insert('news', $data);
        }
}