<?php
class Product extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('product_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['product'] = $this->product_model->get_products();
            $data['title'] = 'Tout nos rhums';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('product/index', $data);
            $this->load->view('templates/footer');
        }
        public function view($id)
        {
            $data['products_item'] = $this->product_model->get_products_by_id($id);
            $data['title'] = 'Nos rhums';

            if (empty($data['products_item']))
            {
                    show_404();
            }
    
            $data['title'] = $data['products_item']['product_name'];
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('product/view', $data);
            $this->load->view('templates/footer');
        }
}