<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
                $this->load->library('session');
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

    public function loginAdmin()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->model('connexion_model');

            $data['title'] = 'Connexion';

            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('password', 'Mot de passe', 'required');

            if ($this->form_validation->run())
            {
                    $result = $this->connexion_model->checkLogin($this->input->post('login'), $this->input->post('password'));
                    if ($result == '')
                    {
                        redirect('admin');
                    }
                    else
                    {
                        $this->session->set_flashdata('message',$result);
                        $this->load->view('templates/header', $data);
                        $this->load->view('templates/nav', $data);
                        $this->load->view('pages/loginAdmin');  
                        $this->load->view('templates/footer', $data);
                    }
            }
            else
            {
                $this->session->set_flashdata('message','Veuillez renseigner les champs pseudo et mot de passe');
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('pages/loginAdmin');
                $this->load->view('templates/footer', $data);
            }
        }
}
