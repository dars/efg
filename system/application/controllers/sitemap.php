<?php
class Sitemap extends Controller{
	function __construct(){parent::Controller();}
	function index(){
		$site_lang = $this->uri->segment(1);
		$this->lang->load('site',$site_lang);
		$data=array();
		$this->load->model('taxonomy_model');
		$data['news']=$this->taxonomy_model->get_names('news',$site_lang);
		$data['sys']=$this->taxonomy_model->get_names('sys',$site_lang);
		$data['prod']=$this->taxonomy_model->get_names('product',$site_lang);
		$data['project']=$this->taxonomy_model->get_names('project',$site_lang);
		$pdata['pdata']="Sitemap";
		$pdata['page_content']=$this->parser->parse("sitemap/index",$data,true);
		$this->parser->parse("layout/main",$pdata);
	}
}