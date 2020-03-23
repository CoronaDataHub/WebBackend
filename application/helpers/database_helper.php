<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getRequests($type) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('requests');
	$CI->db->where(array('type' => $type));
	$query = $CI->db->get();

	return array_reverse($query->result_array());
}

function getRequest($id) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('requests');
	$CI->db->where(array('id' => $id));
	$query = $CI->db->get();

	return array_reverse($query->result_array());
}

function changeStatus($id, $status) {
	$CI =& get_instance();
	$CI->db->where('id', $id);
	$CI->db->update('requests', array('status' => $status));
}
