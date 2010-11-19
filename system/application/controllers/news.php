<?php
class News extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$this->db->order_by('id','desc');
		$config['base_url']=site_url('/news/index');
		$config['total_rows']=$this->db->count_all('boards');
		$config['per_page']=20;
		$config['full_tag_open']="<p class='page-block'>";
		$config['full_tag_close']='</p>';
		$this->pagination->initialize($config);
		$this->load->model('news_model');
		$data['title']="最新消息列表";
		$data['res']=$this->news_model->get_res($config['per_page'],$this->uri->segment(3));

		$pdata['page_title']="最新消息列表";
		$pdata['page_content']=$this->parser->parse('news/index',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
	function view(){
		$this->db->select('a.*,b.name as cname');
		$this->db->join('taxonomies as b','a.category=b.id','left');
		$this->db->where('a.id',$this->uri->segment(3));
		$query = $this->db->get('boards as a');
		$res = $query->result_array();
		$data=$res[0];
		$pdata['page_title']="最新消息";
		$pdata['page_content']=$this->parser->parse('news/view',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
};