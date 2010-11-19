<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<ul class="nav">
	<li><?=anchor(site_url($site_lang."/news"),$this->lang->line('sub_nav_news'))?>|</li>
 	<li><?=anchor(site_url($site_lang."/nodes/".$this->lang->line('sub_nav_design_val')),$this->lang->line('sub_nav_work'))?>|</li>
 	<li><?=anchor(site_url($site_lang."/news"),$this->lang->line('sub_nav_prod'))?>|</li>
 	<li><?=anchor(site_url($site_lang."/news"),$this->lang->line('sub_nav_sys'))?>|</li>
 	<li><?=anchor(site_url($site_lang."/news"),$this->lang->line('sub_nav_project'))?>|</li>
 	<li><?=anchor(site_url($site_lang."/dorma"),$this->lang->line('sub_nav_dorma'),array('style'=>"color:#F00;background:#FFE9E9"))?></li>
</ul>
WindowNeed &copy; 2010 &bull; <a href="index-6.html">Privacy Policy</a>