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
		$this->load->view('dashboard/api', $data);
	}.
}
