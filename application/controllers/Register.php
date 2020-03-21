<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(isset($_SESSION['user_logged'])) {
			redirect("dashboard/api");
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'E-Mail', 'required');
		$this->form_validation->set_rules('password', 'Passwort', 'required');

		if($this->form_validation->run() == TRUE) {
			$data = array(
				'email'=>$_POST['email'],
				'password'=>password_hash($_POST['password'], PASSWORD_BCRYPT)
			);
			$this->db->insert('users', $data);
			$this->session->set_flashdata("success", "Du hast dich erfolgreich registriert. Du kannst dich nun einloggen.");
			redirect("login");
		}
		$this->load->view('register');
	}
}
