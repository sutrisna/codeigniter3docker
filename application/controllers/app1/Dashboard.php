<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        require_login();
		$this->load->view('app1/partials/header');
		$this->load->view('app1/contents/dashboard');
		$this->load->view('app1/partials/footer');
		$this->load->view('app1/js/global');
	}
}
