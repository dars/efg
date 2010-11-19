<h2>Services</h2>
<div class="indent">
	<ul class="list1">
		<li><a href="#"><span class="nav_list">工程服務</span> Scope of Work</a></li>
		<li><a href="<?=site_url('nodes/2')?>" class="sub_nav_l2"><span class="nav_list">設計規劃</span> Design Development</a></li>
		<li><a href="<?=site_url('nodes/3')?>" class="sub_nav_l2"><span class="nav_list">備料加工</span> Material Preparation</a></li>
		<li><a href="<?=site_url('nodes/4')?>" class="sub_nav_l2"><span class="nav_list">責任施工</span> Installation</a></li>
		<li><a href="<?=site_url('nodes/5')?>" class="sub_nav_l2"><span class="nav_list">顧問監造</span> Consultation</a></li>
		<li><a href="#"><span class="nav_list">系統介紹</span> Construction Expertise</a></li>
		<?php
			$this->db->select('a.name,b.id');
			$this->db->join('nodes as b','b.type=a.id','left');
			$this->db->where('a.category','sys');
			$this->db->where('a.lang','zhtw');
			$query = $this->db->get('taxonomies as a');
			$res = $query->result_array();
			foreach($res as $r):
				echo '<li><a href="'.site_url('nodes/'.$r['id']).'" class="sub_nav_l2"><span class="nav_list">'.$r['name'].'</span></a></li>';
			endforeach;
		?>
		<li><a href="#"><span class="nav_list">產品介紹</span> Products</a></li>
		<?php
			$this->db->select('a.name,b.id');
			$this->db->join('nodes as b','b.type=a.id','left');
			$this->db->where('a.category','product');
			$this->db->where('a.lang','zhtw');
			$query = $this->db->get('taxonomies as a');
			$res = $query->result_array();
			foreach($res as $r):
				echo '<li><a href="'.site_url('nodes/'.$r['id']).'" class="sub_nav_l2"><span class="nav_list">'.$r['name'].'</span></a></li>';
			endforeach;
		?>
		<li><a href="<?=site_url('nodes/7')?>"><span class="nav_list">資訊百科</span> Knowledge</a></li>
	</ul>
</div>