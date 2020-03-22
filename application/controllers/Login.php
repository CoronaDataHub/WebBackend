<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(isset($_SESSION['user_logged'])) {
			redirect("dashboard/contact");
		}
	}

	public function index() {
		$this->form_validation->set_rules('email', 'E-Mail', 'required');
		$this->form_validation->set_rules('password', 'Passwort', 'required');

		if($this->form_validation->run() == TRUE) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('email' => $email));
			$query = $this->db->get();

			$user = $query->row();

			//check if user exists
			if($user->email) {
				//if(password_verify($password, $user->password)) {
					$_SESSION['email'] = $email;
					$_SESSION['user_logged'] = TRUE;
					redirect("dashboard/contact");
				//}
			} else {
				$this->session->set_flashdata("error", "Falsche Logindaten.");
				redirect('dashboard/contact', 'refresh');
			}
		}

		$this->load->view('login');
	}
}
