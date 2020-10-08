<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->helper('url_helper');
				$this->load->library('form_validation');
				$this->load->model('register_model');
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
                        $this->load->view('templates/header', $data);
                        $this->load->view('templates/nav', $data);
                        $this->load->view('pages/connexionForm');  
                    }

                // $data = array(
                //         'login' => $this->input->post('login'),
                //         'password' => $this->input->post('password')
                //     );
                // if ($this->connexion_model->checkLogin($data['login'], $data['password'])) {
                //    $this->load->view('admin');
                // } else {
                //         $this->load->view('templates/header', $data);
                //         $this->load->view('templates/nav', $data);
                //         $this->load->view('pages/connexionForm');   
                // }
                // $this->load->view('admin');
            }
            else
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('pages/connexionForm');
            }
		}
		
	
	
		function validation()
		{
            $data['title'] = 'Connexion';

			$this->form_validation->set_rules('user_name', 'Name', 'required|trim');
			$this->form_validation->set_rules('user_email', 'EmailAddress', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
			$this->form_validation->set_rules('user_password', 'Password', 'required');
			if($this->form_validation->run())
			{
				$verification_key = md5(rand());
				$encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
				$data = array(
					'name'      => $this->input->post('user_name'),
					'email'     => $this->input->post('user_email'),
					'password'  => $encrypted_password,
					'verification_key' => $verification_key
				);
				$id = $this->register_model->insert($data);
				if($id > 0)
				{
	
				}
			}
			else
			{
				$this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
				$this->load->view('pages/register');
                $this->load->view('templates/footer', $data);

				
			}
	
		}
}
