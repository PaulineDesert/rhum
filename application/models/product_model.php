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

        public function get_products_by_id($id)
        {
<<<<<<< HEAD
                $query = $this->db->get_where('products', array('product_id' => $id));
                return $query->row_array();
        }
}
=======
                
                $query = $this->db->get_where('products', array('product_id' => $id));
                return $query->row_array();
        }

}
>>>>>>> 131de9f8d183c0cdea666723971772f7540aa933
