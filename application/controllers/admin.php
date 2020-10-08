<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function index()
        {

                if (!isset($_SESSION) || !isset($_SESSION['admin'])) {
                        redirect('pages/connexionForm');
                }
        
            $data['products'] = $this->admin_model->get_products();
            $data['title'] = 'Produits';

            $this->load->view('templates/header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($id = NULL)
        {
            $data['products_item'] = $this->admin_model->get_products($id);

            if (empty($data['products_item']))
            {
                    show_404();
            }
    
            $data['title'] = $data['products_item']['product_name'];
    
            $this->load->view('templates/header', $data);
            $this->load->view('admin/view', $data);
            $this->load->view('templates/footer');
        }

        // public function create()
        // {
        //     $this->load->helper('form');
        //     $this->load->library('form_validation');

        //     $data['title'] = 'Create a news item';

        //     $this->form_validation->set_rules('title', 'Title', 'required');
        //     $this->form_validation->set_rules('text', 'Text', 'required');

        //     if ($this->form_validation->run() === FALSE)
        //     {
        //         $this->load->view('templates/header', $data);
        //         $this->load->view('admin/create');
        //         $this->load->view('templates/footer');

        //     }
        //     else
        //     {
        //         $this->news_model->set_news();
        //         $this->load->view('admin/success');
        //     }
        // }
}