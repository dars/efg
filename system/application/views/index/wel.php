<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="section">
	<h2>{wel_title}</h2>
	{wel_content}
	<div class="clear"></div> 
</div>
<div class="wrapper">
 	<div class="col-1">
		<h2><?=$this->lang->line('sub_nav_work');?></h2>
 		<div class="indent">
			<p>
				<?php
					echo nl2br(strip_tags($nodes['content']));
				?>
			</p>
			<?=anchor($site_lang.'/nodes/'.$nodes['id'],'Read more')?>
 		</div>
	</div>
	<div class="col-2">
		<h2><?=$this->lang->line('sub_nav_project');?></h2>
	 	<img class="img-indent" alt="" src="images/1page-img2.jpg" />
	 	<p>
	 		<?php
	 			echo nl2br(strip_tags($proj['content']));
	 		?>
	 	</p>
	 	<?=anchor($site_lang.'/projects/'.$proj['type'],'Read more')?>
	 	<div class="clear"></div>
	</div>
</div>