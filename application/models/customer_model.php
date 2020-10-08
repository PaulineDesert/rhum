<?php
class Customer_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function set_customers()
        {
            $this->load->helper('url');


            $data = array(
                'register_name' => $this->input->post('name'),
                'register_email' => $this->input->post('email'),
                'register_password' => $this->input->post('password'),
            );

            return $this->db->insert('register', $data);
        }
}