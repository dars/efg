<?php
class News extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$this->db->order_by('id','desc');
		$config['base_url']=site_url('/news/index');
		$config['total_rows']=$this->db->count_all('boards');
		$config['per_page']=20;
		$config['full_tag_open']="<p class='page-block'>";
		$config['full_tag_close']='</p>';
		$this->pagination->initialize($config);
		$this->load->model('news_model');
		$data['title']=$this->lang->line('sub_nav_news');
		$data['res']=$this->news_model->get_res($config['per_page'],$this->uri->segment(3),$site_lang);

		$pdata['page_title']=$this->lang->line('sub_nav_news');
		$pdata['page_content']=$this->parser->parse('news/index',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
	function view(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$this->db->select('a.*,b.name as cname');
		$this->db->join('taxonomies as b','a.category=b.id','left');
		$this->db->where('a.id',$this->uri->segment(4));
		$query = $this->db->get('boards as a');
		$res = $query->result_array();
		$data=$res[0];
		$pdata['page_title']=$this->lang->line('sub_nav_news');
		$pdata['page_content']=$this->parser->parse('news/view',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}
};