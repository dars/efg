<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>管理後台</title>
		<link rel="stylesheet" href="<?=site_url('public/resources/css/ext-all.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/fileuploadfield.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/Growl.css')?>" />
		<link rel="stylesheet" href="<?=site_url('public/css/admin.css')?>" />
		
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-base-debug.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-all-debug.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ext/ext-lang-zh_TW.js')?>"></script>		
		<script type="text/javascript" src="<?=site_url('public/js/ext/FileUploadField.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ext/DataView-more.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ckeditor/ckeditor.js')?>"></script>
		<script type="text/javascript" src="<?=site_url('public/js/ckeditor.js')?>"></script>
		<script type="text/javascript">
		Ext.onReady(function(){
			var title_form = new Ext.form.FormPanel({
				labelAlign:'right',
				labelWidth:100,
				frame:true,
				items:[{
					layout:'column',
					items:[{
						columnWidth:.9,
						layout:'form',
						defaults:{anchor:'99%'},
						items:[{
							fieldLabel:'專案名稱',
							xtype:'textfield'
						}]
					},{
						columnWidth:.1,
						items:[{
							xtype:'button',
							text:'新增專案'
						}]
					}]
				}]
			});
			var pix_form = new Ext.form.FormPanel({
				title:'圖片上傳',
				style:{marginBottom:'5px'},
				width:400,
				labelAlign:'right',
				labelWidth:100,
				frame:true,
				fileUpload:true,
				buttonAlign:'center',
				defaults:{
					anchor:'95%'
				},
				items:[{
					fieldLabel:'圖片一',
					name:'pix1',
					xtype:'fileuploadfield',
					buttonText:'瀏 覽'
				},{
					fieldLabel:'圖片二',
					name:'pix2',
					xtype:'fileuploadfield',
					buttonText:'瀏 覽'
				},{
					fieldLabel:'圖片三',
					name:'pix3',
					xtype:'fileuploadfield',
					buttonText:'瀏 覽'
				},{
					fieldLabel:'圖片四',
					name:'pix4',
					xtype:'fileuploadfield',
					buttonText:'瀏 覽'
				},{
					fieldLabel:'圖片五',
					name:'pix5',
					xtype:'fileuploadfield',
					buttonText:'瀏 覽'
				}],
				buttons:[{
					text:'檔案上傳'
				}]
			});
			var store = new Ext.data.Store({
			
			});
			var tbar = new Ext.Toolbar({
				width:400,
				style:{border:'1px solid #99BBE8'}
			});
			tbar.add('->',{
				text:'刪除',
				icon:'img/delete.png'
			});
			var pix_view = new Ext.DataView({
				store:store,
				width:400,
				autoScroll:true,
				//autoHeight:true,
				height:380,
				emptyText: 'No images to display',
				style: 'border:1px solid #99BBE8; border-top-width: 0',
				plugins: [
					new Ext.DataView.DragSelector()
				]
			});
			var case_store = new Ext.data.Store({
			
			});
			var case_cm = new Ext.grid.ColumnModel([
				new Ext.grid.RowNumberer(),
				{header:'範例名稱',dataIndex:'name',editor:new Ext.grid.GridEditor(new Ext.form.TextField({allowBlank:false}))}
			]);
			var case_record = Ext.data.Record.create({
				name:'name',type:'string'
			});
			var case_list = new Ext.grid.EditorGridPanel({
				title:'案例列表',
				width:400,
				height:200,
				autoScroll:true,
				style:{border:'1px #99BBE8 solid'},
				loadMask:true,
				viewConfig:{
					forceFit:true
				},
				store:case_store,
				cm:case_cm,
				tbar:new Ext.Toolbar(['-',{
					text:'新增',
					handler:function(){
						var p = new case_record({
							name:''
						});
						case_list.stopEditing();
						case_store.insert(0,p);
						case_list.startEditing(0,1);
					}
				},'-',{
					text:'刪除',
					handler:function(){
						Ext.Msg.confirm('訊息','確定要刪除？',function(btn){
							if(btn == 'yes'){
								var sm = case_list.getSelectionModel();
								var cell = sm.getSelectedCell();
								if(cell){
									var record = case_store.getAt(cell[0]);
									case_store.remove(record);
								}
							}
						})
					}
				},'-'])
			});
			var content_form = new Ext.form.FormPanel({
				buttonAlign:'center',
				labelWidth:0,
				items:[{
					hideLabel:true,
					xtype:'ckeditor',
					name:'content',
					CKConfig:{
						customerConfig:'http://192.168.1.131/~Dars/efg/public/js/ckeditor/config.js',
						width:'97%'
					}
				}],
				buttons:[{
					text:'全部儲存',
					handler:function(){
						Ext.Msg.alert('儲存');
					}
				}]
			});
			var p = new Ext.Panel({
				title:'工程實績',
				labelWidth:0,
				width:820,
				autoHeight:true,
				id:'pixadmin',
				frame:true,
				layout:'column',
				autoScroll:true,
				renderTo:Ext.getBody(),
				items:[{
					columnWidth:1,
					bodyStyle:'margin-bottom:5px',
					items:[title_form]
				},{
					columnWidth:.5,
					items:[pix_form,case_list]
				},{
					columnWidth:.5,
					items:[tbar,pix_view]
				},{
					columnWidth:1,
					items:[content_form]
				}]
			});
		});
		</script>
	</head>
	<body>
		
	</body>
</html>
