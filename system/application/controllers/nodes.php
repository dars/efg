<?php
class Nodes extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$this->db->where('id',$this->uri->segment(2));
		$query = $this->db->get('nodes');
		$res = $query->result_array();
		$data = $res[0];
		$pdata['page_title'] = $data['title']." - 霖亞帷幕";
		$pdata['page_content']=$this->parser->parse('index/node',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
}