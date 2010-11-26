<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="flash-menu">
	<!--Valid flash version 8.0-->
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
 		width="980" height="97">
		<param name="movie" value="<?=site_url('public/swf/'.$this->lang->line('flash_menu_url').'?button=1')?>" /> 
		<param name="quality" value="high" />
		<param name="menu" value="false" />
		<!--[if !IE]> <-->
		<object data="<?=site_url('public/swf/'.$this->lang->line('flash_menu_url').'?button=1')?>"
 			width="980" height="97" type="application/x-shockwave-flash">
			<param name="quality" value="high" />
			<param name="menu" value="false" />
			<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
			FAIL (the browser should render some flash content, not this).
		</object>
		<!--> <![endif]-->
	</object>
</div>
<div class="flash-header">
	<?php
		if(!empty($flash)){
			$this->load->view('layout/flash');
		}else{
			$this->load->view('layout/no_flash');
		}
	?>
</div>