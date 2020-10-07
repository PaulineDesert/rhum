<?php
class Product_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_products($id = FALSE)
        {
                if ($id === FALSE)
                {
                        $query = $this->db->get('products');
                        return $query->result_array();
                }

                $query = $this->db->get_where('products', array('product_id' => $id));
                return $query->row_array();
        }

}