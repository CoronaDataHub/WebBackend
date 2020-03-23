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
		$data['apirequests'] = getRequests('API');
		$data['templates'] = getTemplates('API');

		if(!empty($_POST['apikey'])) {
			$templateid = $_POST['template'];
			$apikey = $_POST['apikey'];
			$requestid = $_POST['requestid'];

			sendMail('noreply@corona-datahub.com',
				"florian@zaskoku.com",
				"API Access",
				str_replace("%APIKEY%", $apikey, getTemplate($templateid)->text),
				$requestid);

			changeStatus($requestid, '1');
			redirect('dashboard/api');
		}

		$this->load->view('dashboard/api', $data);
	}
}
