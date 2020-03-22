<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index() {
		$this->session->sess_destroy();
		redirect('login');
	}
}
