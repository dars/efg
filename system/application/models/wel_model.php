<?php
class Wel_model extends Model{
	function __construct(){
		parent::Model();
	}
	function get_wel_content($lang = 'zhtw'){
		$data = array();
		$this->db->where('type',7);
		$this->db->where('lang',$lang);
		$query = $this->db->get('nodes');
		$res = $query->result_array();
		return $res[0];
	}
}