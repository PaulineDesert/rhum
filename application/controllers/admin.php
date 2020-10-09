<?php
class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {

                if (!isset($_SESSION) || !isset($_SESSION['admin'])) {
                        redirect('pages/loginAdmin');
                }
        
            $data['products'] = $this->admin_model->get_products();
            $data['title'] = 'Liste de tout les rhums';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navAdmin', $data);
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
            $this->load->view('templates/navAdmin', $data);
            $this->load->view('admin/view', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Ajouter un produit';

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('image', 'Image', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navAdmin', $data);
                $this->load->view('admin/create');
                $this->load->view('templates/footer');

                   }
                   else
                   {
                       $this->admin_model->set_products();
                       $this->load->view('admin/success');
                   }
        }

        public function update()
        {
                $data['products'] = $this->admin_model->list_products();
                $data['products_types'] = $this->admin_model->list_types_products();
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Modifier un produit:';
            $id = $this->input->post('updateProduct');

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('quantity', 'Quantity', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navAdmin', $data);
                $this->load->view('admin/update');
                $this->load->view('templates/footer');

                   }
                   else
                   {
                        if ($this->admin_model->update_products($id))
                        {
                                // $this->load->view('admin/success');
                        }
                       
                       
                   }
        }

        public function delete($id)
        {
                $data['title'] = 'Entrer un nouveau produit:';
             
                $this->admin_model->delete_products($id);
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navAdmin', $data);
                $this->load->view('admin/delete');
                $this->load->view('templates/footer');
        }

}
