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

	public function index($index='') {
		$data['user'] = $this->session->userdata();
		$data['templates'] = getRequests('templates');

		if(!empty($index)) {
			$action = $this->uri->segment(3);
			if($action == 'delete') {
				deleteTemplate($this->uri->segment(4));
			}
			redirect('dashboard/templates');
		} else if(!empty($_POST['id'])) {
			$id = $_POST['id'];
			$answer = $_POST['answer'];
			updateTemplate($id, $answer);
			redirect('dashboard/templates');
		}

		$this->load->view('dashboard/templates', $data);
	}
}
