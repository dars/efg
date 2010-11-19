標題：{title}<br/>
內容：{content}<br/>
<?php
foreach($cases as $c):
	echo $c['name'];
endforeach;
?>
<div id="image_wrap">
	<img src="http://static.flowplayer.org/tools/img/blank.gif" width="500" height="375" />
</div>

<a class="prev browse left disabled"></a>
<div class="scrollable">
	<div class="items">	
		<?php
		$i=1;
		foreach($pixs as $p):
			if($i%4==1){
				echo "<div>";
			}
			echo '<img src="'.site_url('public/files/'.$p['name']).'">';
			if($i%4==0){
				echo "</div>";
			}
			$i++;
		endforeach;
		if($i%4 != 1){
			echo "</div>";
		}
		?>
	</div>
</div>
<?php
	$disabled='';
	if(count($pixs)<5){
		$disabled=' disabled';
	}
?>
<a class="next browse right<?php echo $disabled?>"></a>
<script type="text/javascript">
$(function() {
$(".scrollable").scrollable();
$(".items img").click(function() {
	if ($(this).hasClass("active")) { return; }
	var url = $(this).attr("src"); //.replace("_t", "");
	var wrap = $("#image_wrap").fadeTo("medium", 0.5);
	var img = new Image();
	img.onload = function() {
		wrap.fadeTo("fast", 1);
		wrap.find("img").attr("src", url);
	};
	img.src = url;
	$(".items img").removeClass("active");
	$(this).addClass("active");
}).filter(":first").click();
});
</script>

