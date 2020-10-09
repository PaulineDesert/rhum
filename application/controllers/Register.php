<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('register_model');
		$this->load->helper('url_helper');

	}

	function index ()
	{
		$this->load->view('register');
	}

	// Registration method with email send
	function validation($page = 'register')
	{
		$this->form_validation->set_rules('user_name', 'Nom', 'required|trim');
		$this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[register.register_email]');
		$this->form_validation->set_rules('user_password', 'Mot de passe', 'required');
		
		if($this->form_validation->run())
		{
			$verification_key = md5(rand());
			$encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
			$data = array(
				'register_name'		=> $this->input->post('user_name'),
				'register_email'		=> $this->input->post('user_email'),
				'register_password'	=> $encrypted_password,
				'register_verification_key' => $verification_key
			);
			$id = $this->register_model->insert($data);
			if($id > 0)
			{
				$this->load->library('email');

				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.gmail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '7';
				$config['smtp_user']    = 'smtptestcode@gmail.com';
				$config['smtp_pass']    = 'SaladeVerte';
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html'; // or text
				$config['validation'] = TRUE; // bool whether to validate email or not      

				$this->email->initialize($config);

				$this->email->from('smtptestcode@gmail.com', 'Cave-à-rhum');

				$this->email->send();

				$subject = "Vérification de votre adresse email pour vous connecter";
				$message = "
				<p>Bonjour ".$this->input->post('user_name')."</p>
				<p>Ceci est un email de vérification. Veuillez cliquer sur le lien suivant pour vérifier votre adresse email :<a href=".base_url().'register/verify_email/'.$verification_key.">Vérifier</a>.</p>";
				

				// Load email library
				$this->email->set_newline("\r\n");

				// Set email informations and content
				$this->email->from('smtptestcode@gmail.com');
				$this->email->to($this->input->post('user_email'));
				$this->email->subject($subject);
				$this->email->message($message);

				if($this->email->send())
				{
				
				$data['title'] = ucfirst($page); // Capitalize the first letter
				$this->session->set_flashdata('message', 'Vérifiez votre boîte de réception pour valider votre adresse email');
	    		$this->load->view('templates/header', $data);
	    		$this->load->view('templates/nav', $data);
            	$this->load->view('pages/'.$page, $data);
            	$this->load->view('templates/footer', $data);
				}
				
				
			}
		}
		else
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

	}
	// Verify if email exist before registration
	function verify_email($page = 'email_verification')
	{
		if($this->uri->segment(3))
		{
			$verification_key = $this->uri->segment(3);
			if($this->register_model->verify_email($verification_key))
			{
				$data['title'] = ucfirst($page); // Capitalize the first letter
				//Message success
				$data['message'] = '<h2 class="text-center text-success">Votre email a été vérifié avec succès.<br />Vous pouvez désormais vous connecter en cliquant <a href="'.base_url().'register">ici</a></h2>';

				$this->load->view('templates/header', $data);
	    		$this->load->view('templates/nav', $data);
            	$this->load->view('pages/email_verification', $data);
            	$this->load->view('templates/footer', $data);

			}
			else
			{
				$data['title'] = ucfirst($page); // Capitalize the first letter
				//Message error
				$data['message'] = '<h2 class="text-center text-danger">Ce lien n\'est plus valide :(</h2>';
				$this->load->view('templates/header', $data);
	    		$this->load->view('templates/nav', $data);
				$this->load->view('pages/email_verification', $data);
            	$this->load->view('templates/footer', $data);

			}
			
		}
	}

	// Verify if email exist before registration
	function loginCustomer($page = 'register')
	{
		
		$this->form_validation->set_rules('customer_email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('customer_password', 'Mot de passe', 'required');
			
		
	}

	
}
