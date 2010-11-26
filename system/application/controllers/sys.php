<?php
class Sys extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$this->db->select('b.id');
		$this->db->join('nodes as b','b.type = a.id','left');
		$this->db->where('a.category','sys');
		$this->db->where('a.lang',$site_lang);
		$this->db->order_by('a.weight','ASC');
		$sub_query = $this->db->get('taxonomies as a');
		$sub_res = $sub_query->result();
		if(count($sub_res)<1){
			redirect($site_lang);
		}else{
			redirect($site_lang.'/nodes/'.$sub_res[0]->id);
		}
		/*
		$sub_ar=array();
		foreach($sub_res as $r):
			array_push($sub_ar,$r->id);
		endforeach;
		$this->db->flush_cache();
		$this->db->where_in('type',$sub_ar);
		$query = $this->db->get('nodes');
		$data['sys'] = $query->result_array();
		$pdata['page_title'] = '系統介紹';
		$pdata['content'] = $this->parser->parse('sys/index',$data,true);
		$this->parser->parse('layout/main',$pdata);
		*/
	}
}