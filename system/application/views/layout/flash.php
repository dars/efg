<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
 	width="980" height="389">
	<param name="movie" value="<?=site_url('public/swf/'.$this->lang->line('flash_header_url'))?>" /> 
	<param name="quality" value="high" />
	<param name="menu" value="false" />
	<object data="<?=site_url('public/swf/'.$this->lang->line('flash_header_url'))?>"
 		width="980" height="389" type="application/x-shockwave-flash">
		<param name="quality" value="high" />
		<param name="menu" value="false" />
		<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
		FAIL (the browser should render some flash content, not this).
	</object>
</object>