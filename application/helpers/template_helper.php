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

function getTemplateByTitle($title) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('templates');
	$CI->db->where(array('title' => $title));
	$query = $CI->db->get();

	return $query->row();
}

function getTemplates($type) {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('templates');
	$CI->db->where(array('type' => $type));
	$query = $CI->db->get();

	return array_reverse($query->result_array());
}

function getAllTemplates() {
	$CI =& get_instance();
	$CI->db->select('*');
	$CI->db->from('templates');
	$query = $CI->db->get();

	return array_reverse($query->result_array());
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

function addTemplate($type, $text, $templatename, $author) {
	$CI =& get_instance();
	$data = array(
		'type'=>$type,
		'text'=>$text,
		'title'=>$templatename,
		'author'=>$author
	);
	$CI->db->insert('templates', $data);
}
