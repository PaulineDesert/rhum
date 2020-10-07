<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('customer_model');
                $this->load->helper('url_helper');
        }

//Create new Customer
	public function connect()
	{
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Connectez-vous';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Mot de passe', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/logOrRegistForm');
            $this->load->view('templates/footer');
        }
    }
