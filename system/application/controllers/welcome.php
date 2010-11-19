<?php

class Welcome extends Controller {

	function Welcome(){
		parent::Controller();	
	}
	
	function index(){
		$data = array();
		$this->db->where('type',7);
		$this->db->where('lang','zhtw');
		$query = $this->db->get('nodes');
		$res = $query->result_array();
		$data['wel_node']=$res;
		$pdata['page_title']='歡迎光臨 霖亞帷幕科技工程有限公司';
		$pdata['page_content']=$this->load->view('index/wel',$data,true);
		$this->parser->parse('layout/main',$pdata);
	}

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */