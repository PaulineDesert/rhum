<?php
class Customer extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('customer_model');
                $this->load->helper('url_helper');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Inscription';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('customer/create');
                $this->load->view('templates/footer');

                   }
                   else
                   {
                       $this->customer_model->set_customers();
                       $this->load->view('customer/validation');
                   }
        }
}
