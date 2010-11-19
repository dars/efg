<?php
class Taxonomy extends Controller{
	function __construct(){parent::Controller();}
	function get_nav_list(){
		$this->load->model('taxonomy_model');
		$res = $this->taxonomy_model->nav_get_list($taxonomy,$lang);
		foreach($res as $r):
			echo '<li><a href="'.site_url('nodes/5').'" class="sub_nav_l2"><span class="nav_list">'.$r['title'].'</span></a></li>';
		endforeach;
	}
}