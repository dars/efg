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
		$res = $query->row_array();
		return $res;
	}
	function get_summary_content($id){
		$this->db->where('id',$id);
		$query = $this->db->get('nodes');
		$res = $query->row_array();
		return $res;
	}
	function get_proj_content(){
		$query_str = "SELECT * FROM nodes WHERE type IN(SELECT id FROM taxonomies WHERE category='project') LIMIT 1";
		$query = $this->db->query($query_str);
		$res = $query->row_array();
		return $res;
	}
}