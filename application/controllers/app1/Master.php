<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
	{
        require_login();
    }

    private function templates($data = FALSE)
    {
        if ($data === FALSE) {
            // Page not found
        } else {
            $prefix = 'app1';
            $this->load->view($prefix.'/partials/header', $data['library']);
            $this->load->view($prefix.'/contents/global');
            $this->load->view($prefix.'/partials/footer');
            $this->load->view($prefix.'/js/global');
        }
    }

    public function user()
    {
        $crud = new grocery_CRUD();
        $crud->set_crud_url_path(site_url('/app1/master/user'));
        $crud->set_table('users');
        // $crud->where('role <', 'superadmin');
        $crud->columns(['full_name','role','status','created_at','updated_at']);
        $crud->edit_fields('full_name', 'role', 'status');
        $crud->add_fields('full_name','username','password','role','email','phone_number');
        $crud->required_fields('full_name', 'role', 'status','username','password');

        $crud->field_type(
            'role',
            'dropdown',
            array('admin' => 'Admin', 'user' => 'User')
        );

        $crud->unset_print();
        $crud->unset_clone();
        $crud->unset_export();
        $crud->unset_read();
        $crud->unset_delete();
        
        $output = $crud->render();
        $data = array(
            "library" => $output
        );

        $this->templates($data);
    }
}