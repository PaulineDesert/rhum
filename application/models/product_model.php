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
                $this->db->from('products');
                $this->db->join('types', 'products.type_id = types.type_id');
                $this->db->where('products.type_id', $id);
                $query = $this->db->get();
                return $query->result_array();
        }

}