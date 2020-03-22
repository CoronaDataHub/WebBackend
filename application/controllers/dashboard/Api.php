<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index() {
		$data['user'] = $this->session->userdata();
		$data['apirequests'] = getRequests('api_requests');
		$data['templates'] = getRequests('templates');

		$this->form_validation->set_rules('template', 'Template', 'required');
		$this->form_validation->set_rules('apikey', 'API-Key', 'required');
		if($this->form_validation->run() == TRUE) {
			print_r('api');
			die();
			$templateid = $_POST['template'];
			$apikey = $_POST['apikey'];

			print_r($templateid.$apikey);
			die();


			if(!empty($mail)) {
				sendMail($data['user']['email'], "florian@zaskoku.com", "API Access @Corona-DataHub", getTemplate($mail));
			}
		}

		$this->load->view('dashboard/api', $data);
	}
}
