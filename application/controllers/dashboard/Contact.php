<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['user_logged'])) {
			redirect("login");
		}
	}

	public function index() {
		$data['user'] = $this->session->userdata();
		$data['contactrequests'] = getRequests('CONTACT');
		$data['templates'] = getTemplates('CONTACT');

		if(!empty($_POST['template'])) {
			$templateid = $_POST['template'];
			$requestid = $_POST['requestid'];

			sendMail('noreply@corona-datahub.com',
				"florian@zaskoku.com",
				"Contact",
				getTemplate($templateid)->text,
				$requestid);

			changeStatus($requestid, '1');
			redirect('dashboard/contact');
		}

		$this->load->view('dashboard/contact', $data);
	}
}
