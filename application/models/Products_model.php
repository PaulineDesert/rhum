<?php
class Products_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_product($productType = NULL)
        {
                if ($productType === 'blanc')
                {
                        $query = $this->db->get('products');
                        return $query->result_array();
                }

                $query = $this->db->get_where('product_', array('product_type' => $productType));
                return $query->row_array();
        }
}