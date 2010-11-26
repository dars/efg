<?php
class News_model extends Model{
	function __construct(){parent::Model();}
	function get_res($num,$offset,$lang){
		$this->db->select('a.*,b.name as cname');
		$this->db->where('a.lang',$lang);
		$this->db->join('taxonomies as b','a.category=b.id','left');
		$query = $this->db->get('boards as a',$num,$offset);
		return $query->result_array();
	}
}