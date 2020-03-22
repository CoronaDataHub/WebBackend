<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getTemplate($id) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('templates');
	$CI->db->where(array('id' => $id));
	$query = $CI->db->get();

	return $query->row();
}

function deleteTemplate($id) {
	$CI =& get_instance();
	$CI->db->where('id', $id);
	$CI->db->delete('templates');
}

function updateTemplate($id, $text) {
	$CI =& get_instance();
	$CI->db->where('id', $id);
	$CI->db->update('templates', array('text' => $text));
}

function addTemplate($type, $text, $author) {
	$CI =& get_instance();
	$data = array(
		'type'=>$type,
		'text'=>$text,
		'author'=>$author
	);
	$CI->db->insert('templates', $data);
}
