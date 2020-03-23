<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quellen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index($mail='') {
		$data['user'] = $this->session->userdata();
		$data['quellenrequests'] = getRequests("quellen_requests");
		$data['templates'] = getRequests('templates');

		if(!empty($_POST['template'])) {
			$templateid = $_POST['template'];

			sendMail('noreply@corona-datahub.com', "florian@zaskoku.com", "API Access @Corona-DataHub", /*getTemplate($mail)*/'test quellen');
		}

		$this->load->view('dashboard/quellen', $data);
	}
}
