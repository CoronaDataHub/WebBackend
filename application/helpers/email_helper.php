<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function sendMail($adminuser, $sendto, $subject, $message, $requestid) {
	$CI =& get_instance();
	$CI->load->library('email');

	$CI->email->from('noreply@corona-datahub.com', $adminuser);
	$CI->email->to($sendto);

	$CI->email->subject($subject);
	$CI->email->message(replacePlaceholder($message, $requestid));

	$CI->email->send();
}

function replacePlaceholder($message, $requestid) {
	$req = getRequest($requestid);
	$request = $req[0];

	$placeholder = array("%EMAIL%", "%NAME%", "%TEXT%", "%DATE%");
	$replaces   = array($request['email'], $request['name'], $request['text'], $request['date']);

	return str_replace($placeholder, $replaces, $message);
}
