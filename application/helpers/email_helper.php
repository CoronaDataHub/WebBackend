<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function sendMail($adminuser, $sendto, $subject, $message) {
	$CI =& get_instance();
	$CI->load->library('email');

	$CI->email->from('noreply@corona-datahub.com', $adminuser);
	$CI->email->to($sendto);

	$CI->email->subject($subject);
	$CI->email->message($message);

	$CI->email->send();
}
