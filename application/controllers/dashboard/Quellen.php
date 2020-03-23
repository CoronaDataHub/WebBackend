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
		$data['quellenrequests'] = getRequests("QUELLEN");
		$data['templates'] = getTemplates("QUELLEN");

		if(!empty($_POST['template'])) {
			$templateid = $_POST['template'];
			$requestid = $_POST['requestid'];

			sendMail('noreply@corona-datahub.com',
				"florian@zaskoku.com",
				"New Sources",
				getTemplate($templateid)->text,
				$requestid);

			changeStatus($requestid, '1');
			redirect('dashboard/quellen');
		}

		$this->load->view('dashboard/quellen', $data);
	}
}
