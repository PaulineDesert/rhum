<?php
class Admin_model extends CI_Model {

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

        public function set_products()
        {
            $this->load->helper('url');


            $data = array(
                'product_name' => $this->input->post('name'),
                'product_description' => $this->input->post('description'),
                'product_image' => $this->input->post('image'),
                'product_price' => $this->input->post('price'),
                'product_qty' => $this->input->post('quantity'),
                'type_id' => $this->input->post('type'),
            );

            return $this->db->insert('products', $data);
        }

        public function update_products($id)
        {
  
            $this->load->helper('url');

            $data = array(
                'product_name' => $this->input->post('name'),
                'product_description' => $this->input->post('description'),
                'product_image' => empty($this->input->post('image')) ? $this->input->post('productImage') : $this->input->post('image'),
                'product_price' => $this->input->post('price'),
                'product_qty' => $this->input->post('quantity'),
                'type_id' => $this->input->post('type'),
            );

            $query = $this->db->where('product_id', $id);
            $query = $this->db->update('products', $data);
            return $query;

        }

        public function delete_products($id)
        {                
                $query = $this->db->where('product_id', $id);
                $query = $this->db->delete('products');
        }

        public function list_products()
        {
                $query = $this->db->get('products');
                return $query->result_array();
        }

        public function list_types_products()
        {
                $query = $this->db->get('types');
                return $query->result_array();
        }
}