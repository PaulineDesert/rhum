<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('connexion_model');
                $this->load->helper('url_helper');
        }

    public function view($page = 'home')
    {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
    
	    $this->load->view('templates/header', $data);
	    $this->load->view('templates/nav', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }

    public function connexionForm()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Connexion';

            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('password', 'Mot de passe', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('pages/connexionForm');

            }
            else
            {
                $data = array(
                        'login' => $this->input->post('login'),
                        'password' => $this->input->post('password')
                    );
                if ($this->connexion_model->checkLogin($data['login'], $data['password'])) {
                   $this->load->view('admin');
                } else {
                        $this->load->view('templates/header', $data);
                        $this->load->view('templates/nav', $data);
                        $this->load->view('pages/connexionForm');   
                }
                // $this->load->view('admin');
            }
        }
}
