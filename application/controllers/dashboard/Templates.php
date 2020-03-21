<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class templates extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index($mail='') {
		$data['user'] = $this->session->userdata();
		$data['templates'] = getRequests('templates');

		$this->load->view('dashboard/templates', $data);
	}
}
