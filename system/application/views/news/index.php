<div class="index_div">
	<h2>{title}</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>類別</th>
			<th>標題</th>
			<th>張貼時間</th>
			<th>更新時間</th>
		</tr>
		<?php foreach($res as $r):?>
		<tr id="<?=$r['id']?>">
			<td class="center"><?=$r['id']?></td>
			<td><?=$r['cname']?></td>
			<td><?=anchor('news/view/'.$r['id'],$r['title'])?></td>
			<td><?=$r['created']?></td>
			<td><?=$r['modified']?></td>
		</tr>
		<?php endforeach;?>
	</table>
	<?php echo $this->pagination->create_links();?>
</div>