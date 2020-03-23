<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keys extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index($index='') {
		$data['user'] = $this->session->userdata();

		$this->load->view('dashboard/keys', $data);
	}
}
