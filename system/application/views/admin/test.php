<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理後台</title>
		<link rel="stylesheet" href="<?=site_url('public/resources/css/ext-all.css')?>">
		<link rel="stylesheet" href="<?=site_url('public/css/Growl.css')?>">
		<link rel="stylesheet" href="<?=site_url('public/css/admin.css')?>" />
		
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-base-debug.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-all-debug.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-lang-zh_TW.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ckeditor/ckeditor.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ckeditor.js')?>"></script>
		
		
		<script type="text/javascript">
		Ext.onReady(function(){
			var rec = new Ext.data.Record.create([
				{name:'id'},
				{name:'title'},
				{name:'content'},
				{name:'lang'},
				{name:'type'},
				{name:'created'},
				{name:'modified'}
			]);
			var ds = new Ext.data.Store({
				proxy:new Ext.data.HttpProxy({
					method:'post',
					url:'get_node_content'
				}),
				reader: new Ext.data.JsonReader({
					root:'root'
					},rec)
			});
			ds.on('load',function(){
				//alert(ds.getAt(0).data.title);
				var record = ds.getAt(0);
				form.getForm().loadRecord(record);
				/* 取得ds store內所有物件
				for(o in ds.getAt(0).data){
					Ext.get('tmp').dom.innerHTML += o + "\n";
				}
				*/
			});
			ds.load({params:{id:2}});
			/* 修改baseParams但是用load的方式重新讀取資料就會是正確的...
			ds.baseParams.id=1;
			setTimeout(function(){ds.load()},2000);
			*/
			var form = new Ext.form.FormPanel({
				renderTo:Ext.getBody(),
				labelAlign:'right',
				labelWidth:100,
				frame:true,
				defaultType:'textfield',
				items:[{
					xtype:'hidden',
					name:'id'
				},{
					fieldLabel:'Title',
					name:'title'
				},{
					xtype:'ckeditor',
					fieldLabel:'Content',
					name:'content',
					CKConfig:{
						customConfig:'http://localhost/~Dars/efg/public/js/ckeditor/config.js',
						width:'82%'
					}
				}],
				buttons:[{
					text:'儲存',
					handler:function(){
						form.getForm().submit({
							url:'save_node_content',
							success:function(){alert('ok')},
							failure:function(){alert('failure')}
						});
					}
				},{
					text:'換一筆',
					handler:function(){
						ds.baseParams.id = 4;
						ds.load();
						
					}
				}]
			});
		});
		</script>
	</head>
	<body>
		
	</body>
</html>
