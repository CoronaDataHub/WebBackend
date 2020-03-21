<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function unsetSession() {
	$CI =& get_instance();
	$CI->session->sess_destroy();
}
