<?php
class Prod extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$this->db->select('b.id');
		$this->db->join('nodes as b','b.type = a.id','left');
		$this->db->where('a.category','product');
		$this->db->where('a.lang',$site_lang);
		$this->db->order_by('a.weight','ASC');
		$sub_query = $this->db->get('taxonomies as a');
		$sub_res = $sub_query->result();
		if(count($sub_res)<1){
			redirect($site_lang);
		}else{
			redirect($site_lang.'/nodes/'.$sub_res[0]->id);
		}
	}
}