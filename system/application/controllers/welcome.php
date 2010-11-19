<?php
class Welcome extends Controller {
	function __construct(){
		parent::Controller();	
	}
	function index(){
		$lang = $this->uri->segment(1);
		$this->lang->load('site',$lang);		
		$this->load->model('wel_model');
		$tmp=$this->wel_model->get_wel_content($lang);
		$data['wel_title']=$tmp['title'];
		$data['wel_content']=$tmp['content'];
		$pdata['page_title']='歡迎光臨 霖亞帷幕科技工程有限公司';
		$pdata['page_content']=$this->parser->parse('index/wel',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */