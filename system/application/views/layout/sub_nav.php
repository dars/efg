<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);

$ii=0;
if($this->uri->segment(3)){
	$this->db->select('b.category');
	$this->db->join('taxonomies as b','a.type=b.id','left');
	$this->db->where('a.id',$this->uri->segment(3));
	$query = $this->db->get('nodes as a');
	$res = $query->result_array();
	$res = $res[0];
	$cate = $res['category'];
	switch($cate){
		case 'summary':
			$ii=0;
			if($this->uri->segment(3) == 7 || $this->uri->segment(3) == 14){
				$ii=3;
			}
			break;
		case 'sys':
			$ii=1;
			break;
		case 'product':
			$ii=2;
			break;
	}
}

?>
<script type="text/javascript">
$(function(){
	$("#list1").tabs("#list1 div.pane",{tabs:'h3',effect:'slide',initialIndex:<?=$ii?>});
	$("#nav_know").click(function(){
		location.href='<?=site_url($site_lang.'/nodes/'.$this->lang->line('sub_nav_know_nav'))?>';
	});
});
</script>

<div class="indent">
	<div id="list1">
		<h3><img src="<?=site_url('public/images/list_arrow.png')?>"><span class="nav_list"><?=$this->lang->line('sub_nav_work');?></span></h3>
		<div class="pane">
			<ul>
				<li><a href="<?=site_url($site_lang.'/nodes/'.$this->lang->line('sub_nav_design_val'))?>" class="sub_nav_l2"><span class="nav_list"><?=$this->lang->line('sub_nav_design')?></span></a></li>
				<li><a href="<?=site_url($site_lang.'/nodes/'.$this->lang->line('sub_nav_material_val'))?>" class="sub_nav_l2"><span class="nav_list"><?=$this->lang->line('sub_nav_material')?></span></a></li>
				<li><a href="<?=site_url($site_lang.'/nodes/'.$this->lang->line('sub_nav_inst_val'))?>" class="sub_nav_l2"><span class="nav_list"><?=$this->lang->line('sub_nav_inst')?></span></a></li>
				<li><a href="<?=site_url($site_lang.'/nodes/'.$this->lang->line('sub_nav_cons_val'))?>" class="sub_nav_l2"><span class="nav_list"><?=$this->lang->line('sub_nav_cons')?></span></a></li>
			</ul>
		</div>
		<h3><img src="<?=site_url('public/images/list_arrow.png')?>"><span class="nav_list"><?=$this->lang->line('sub_nav_sys');?></span></h3>
		<?php
			$this->db->select('a.name,b.id');
			$this->db->join('nodes as b','b.type=a.id','left');
			$this->db->where('a.category','sys');
			$this->db->where('a.lang',$site_lang);
			$query = $this->db->get('taxonomies as a');
			$res = $query->result_array();
			echo '<div class="pane"><ul>';
			foreach($res as $r):
				echo '<li><a href="'.site_url($site_lang.'/nodes/'.$r['id']).'" class="sub_nav_l2"><span class="nav_list">'.$r['name'].'</span></a></li>';
			endforeach;
			echo '</ul></div>';
		?>
		<h3><img src="<?=site_url('public/images/list_arrow.png')?>"><span class="nav_list"><?=$this->lang->line('sub_nav_prod');?></span></h3>
		<?php
			$this->db->select('a.name,b.id');
			$this->db->join('nodes as b','b.type=a.id','left');
			$this->db->where('a.category','product');
			$this->db->where('a.lang',$site_lang);
			$query = $this->db->get('taxonomies as a');
			$res = $query->result_array();
			echo '<div class="pane"><ul>';
			foreach($res as $r):
				echo '<li><a href="'.site_url($site_lang.'/nodes/'.$r['id']).'" class="sub_nav_l2"><span class="nav_list">'.$r['name'].'</span></a></li>';
			endforeach;
			echo '</ul></div>';
		?>
		<h3><img src="<?=site_url('public/images/list_arrow.png')?>"><a href="#" id="nav_know"><span class="nav_list"><?=$this->lang->line('sub_nav_know');?></span></a></h3>
	</div>
</div>