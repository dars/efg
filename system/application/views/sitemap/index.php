<?php
$site_lang = $this->uri->segment(1);
$this->lang->load('site',$site_lang);
?>
<div class="sitemap">
	<h2>Sitemap</h2>
	<ul id="utilityNav">
		<li><?=anchor('zhtw','中文版')?></li>
		<li><?=anchor('en','English')?></li>
		<li><?=anchor($site_lang.'/sitemap','Sitemap')?></li>
	</ul>
	<ul id="primaryNav" class="col6">
		<li id="home"><?=anchor($site_lang,$this->lang->line('sub_nav_home'))?></li>
		<li><?=anchor($site_lang.'/news',$this->lang->line('sub_nav_news'))?>
			<?php
				if(count($news)>0){
					echo "<ul>";
					foreach($news as $i):
						echo "<li>".anchor($site_lang."/news/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor('#',$this->lang->line('sub_nav_work'))?>
			<ul>
				<li><?=anchor($site_lang."/nodes/2/",$this->lang->line('sub_nav_design'))?></li>
				<li><?=anchor($site_lang."/nodes/3/",$this->lang->line('sub_nav_material'))?></li>
				<li><?=anchor($site_lang."/nodes/4/",$this->lang->line('sub_nav_inst'))?></li>
				<li><?=anchor($site_lang."/nodes/5/",$this->lang->line('sub_nav_cons'))?></li>
			</ul>
			</li>
		<li><?=anchor($site_lang.'/nodes/6/',$this->lang->line('sub_nav_service'))?></li>
		<li><?=anchor('#',$this->lang->line('sub_nav_prod'))?>
			<?php
				if(count($prod)>0){
					echo "<ul>";
					foreach($prod as $i):
						echo "<li>".anchor($site_lang."/nodes/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor('#',$this->lang->line('sub_nav_sys'))?>
			<?php
				if(count($sys)>0){
					echo "<ul>";
					foreach($sys as $i):
						echo "<li>".anchor($site_lang."/nodes/".$i['id'],$i['name'])."</li>";
					endforeach;
					echo "</ul>";
				}
			?>
			</li>
		<li><?=anchor($site_lang.'/dorma',$this->lang->line('sub_nav_dorma'))?></li>
	</ul>
</div>