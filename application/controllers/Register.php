<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('register_model');
	}

	function index ()
	{
		$this->load->view('register');
	}

	function validation()
	{
		$this->form_validation->set_rules('user_name', 'Nom', 'required|trim');
		$this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[register.register_email]');
		$this->form_validation->set_rules('user_password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$verification_key = md5(rand());
			$encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
			$data = array(
				'name'		=> $this->input->post('user_name'),
				'email'		=> $this->input->post('user_email'),
				'password'	=> $encrypted_password,
				'verification_key' => $verification_key
			);
			$id = $this->register_model->insert($data);
			if($id > 0)
			{

			}
		}
		else
		{
			$this->index();
		}

	}
}
