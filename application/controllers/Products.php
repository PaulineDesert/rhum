<?php
class Products extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('product_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['product'] = $this->product_model->get_product();
                $data['title'] = 'Nos produits';
        
                $this->load->view('templates/header', $data);
                $this->load->view('pages/product', $data);
                $this->load->view('templates/footer');
        }
        public function view($productType = 'blanc')
        {
                $data['product'] = $this->product_model->get_product($productType);

                if (empty($data['product']))
                {
                    $data['notAvailable'] = 'Nos rhum' . $productType . 'sont indisponibles pour le moment';
                }

                $data['product'] = $data['product']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('pages/view', $data);
                $this->load->view('templates/footer');
        }
}
