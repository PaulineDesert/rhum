<?php
class Product_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_products()
        {
                $query = $this->db->get('products');
                return $query->row_array();
        }

}