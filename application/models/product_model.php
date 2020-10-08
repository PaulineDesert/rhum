<?php
class Product_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_products()
        {
                $query = $this->db->get('products');
                return $query->result_array();
        }

        public function get_products_by_type($id)
        {
                $this->db->select('*');
                $this->db->join('types', 'products.type_id = types.type_id');
                // $query = $this->get();
                $query = $this->db->get_where('products', array('products.type_id' => $id));
                return $query->row_array();
        }

}
