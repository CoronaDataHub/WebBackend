<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getRequests($table) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from($table);
	$query = $CI->db->get();

	return array_reverse($query->result_array());
}
