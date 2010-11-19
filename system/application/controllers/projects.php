<?php
class Projects extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$this->db->where('type',$this->uri->segment(2));
		$query = $this->db->get('nodes');
		$res = $query->result_array();
		$data = $res[0];
		
		$this->db->where('project_id',$this->uri->segment(2));
		$query = $this->db->get('cases');
		$data['cases'] = $query->result_array();
		
		$this->db->where('hash_id',$this->uri->segment(2));
		$query = $this->db->get('files');
		$data['pixs'] = $query->result_array();
		
		$pdata['page_title']='工程實績';
		$pdata['page_content']=$this->parser->parse('project/view',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
}