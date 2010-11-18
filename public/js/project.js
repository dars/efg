var project_store = new Ext.data.Store({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:'get_nodes_title'
	}),
	reader: new Ext.data.JsonReader({root:'root'},[
			{name:'name'},
			{name:'id'}
		])
});
project_store.on('load',function(){
	project_combo.setValue(project_store.getAt(0).id);
	read_data();
});

var project_combo = new Ext.form.ComboBox({
	fieldLabel:'工法系統分類',
	id:'project_combo',
	store:project_store,
	mode:'local',
	hiddenName:'type',
	emptyText:'請選擇',
	triggerAction:'all',
	editable:false,
	displayField:'name',
	valueField:'id'
});
project_combo.on('select',function(){read_data();});


var title_form = new Ext.form.FormPanel({
	labelAlign:'right',
	style:{marginBottom:'5px'},
	labelWidth:100,
	frame:true,
	items:[project_combo]
});
var pix_form = new Ext.form.FormPanel({
	title:'圖片上傳',
	style:{marginBottom:'5px'},
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	fileUpload:true,
	buttonAlign:'center',
	defaults:{
		anchor:'95%'
	},
	items:[{
		xtype:'hidden',
		name:'type',
		id:'ptype'
	},{
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
		text:'檔案上傳',
		handler:function(){
			pix_form.get('ptype').setValue(project_combo.getValue());
			pix_form.getForm().submit({
				url:'upload_project_pix',
				waitMsg:'圖檔上傳中',
				success:function(){
					show_Growl(1,'訊息','上傳成功');
					pix_form.getForm().reset();
					pix_store.reload();
				},
				failure:function(){
					show_Growl(2,'警告','上傳異常');
				}
			});
		}
	},{
		text:'重設',
		handler:function(){
			pix_form.getForm().reset();
		}
	}]
});
var pix_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:'get_project_pix'
	}),
	root:'root',
	fields:['id','name','hash_id']
});
//pix_store.load();

var tpl = new Ext.XTemplate(
	'<tpl for=".">',
		'<div class="thumb-wrap" id="{name}">',
		'<div class="thumb"><img src="../public/files/{name}" title="{name}"></div>',
		'<span class="x-editable">{name}</span></div>',
	'</tpl>',
	'<div class="x-clear"></div>');

var tbar = new Ext.Toolbar({
	style:{border:'1px solid #99BBE8'}
});
tbar.add('->',{
	text:'刪除',
	icon:'img/delete.png'
});
var pix_panel = new Ext.Panel({
	id:'images-view',
	frame:true,
	height:450,
	layout:'fit',
	title:'圖片瀏覽',
	tbar:tbar,
	autoScroll:true,
	items:new Ext.DataView({
		store:pix_store,
		tpl:tpl,
		autoHeight:true,
		multiSelect:true,
		overClass:'x-view-over',
		itemSelector:'div.thumb-wrap',
		emptyText: 'No images to display',
		plugins: [
			new Ext.DataView.DragSelector(),
			new Ext.DataView.LabelEditor({dataIndex: 'name'})
		],
		prepareData:function(data){
			return data;
		}
	})
});
var case_store = new Ext.data.JsonStore({
	proxy: new Ext.data.HttpProxy({
		method:'post',
		url:'get_cases_list'
	}),
	root:'root',
	fields:[
		{name:'name'},
		{name:'id'},
		{name:'project_id'}
	]
});
var case_cm = new Ext.grid.ColumnModel([
	new Ext.grid.RowNumberer(),
	{header:'範例名稱',dataIndex:'name',editor:new Ext.grid.GridEditor(new Ext.form.TextField({allowBlank:false}))},
	{header:'id',dataIndex:'id',hidden:true},
	{header:'project_id',dataIndex:'project_id',hidden:true}
]);
var case_record = Ext.data.Record.create(
	{name:'name',type:'string'},
	{name:'id',type:'int',hidden:true},
	{name:'project_id',type:'int',hidden:true}
);
var case_list = new Ext.grid.EditorGridPanel({
	title:'案例列表',
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
				name:'',
				id:'',
				project_id:project_combo.getValue()
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
			});
		}
	},'-',{
		text:'儲存',
		handler:function(){
			var m = case_store.modified.slice(0);
			var jsonAr=[];
			Ext.each(m,function(item){
				jsonAr.push(item.data);
			});
			Ext.Ajax.request({
				method:'post',
				url:'save_case',
				success:function(){
					show_Growl(1,'訊息','儲存成功');
					case_store.reload();
				},
				failure:function(){
					show_Growl(2,'訊息','儲存異常');
					case_store.reload();
				},
				params:{data:Ext.encode(jsonAr)}
			});
		}
	}])
});
var content_rec = new Ext.data.Record.create([{name:'content'}]);
var content_store = new Ext.data.JsonStore({
	proxy:new Ext.data.HttpProxy({
		method:'post',
		url:'get_project_content'
	}),
	root:'root',
	fields:content_rec
});
content_store.on('load',function(){
	var record = content_store.getAt(0);
	content_form.getForm().reset();
	content_form.getForm().loadRecord(record);
	content_form.getForm().el.unmask();
});
var content_form = new Ext.form.FormPanel({
	labelWidth:0,
	style:{marginTop:'5px'},
	items:[{
		hideLabel:true,
		xtype:'hidden',
		name:'type',
		id:'type'
	},{
		hideLabel:true,
		xtype:'ckeditor',
		name:'content',
		CKConfig:{
			customerConfig:'http://192.168.1.131/~Dars/efg/public/js/ckeditor/config.js',
			width:'97%'
		}
	}],
	buttons:[{
		text:'儲存',
		handler:function(){
			content_form.getForm().el.mask('資料儲存中','x-mask-loading');
			content_form.get('type').setValue(project_combo.getValue());
			content_form.getForm().submit({
				url:'save_project_content',
				success:function(){
					show_Growl(1,'訊息','資料已儲存');
					content_form.getForm().el.unmask();
				},
				failure:function(){
					show_Growl(2,'警告','資料儲存異常');
					content_form.getForm().el.unmask();
				}
			});
		}
	}]
});
var project_panel = new Ext.Panel({
	title:'工程實績',
	autoHeight:true,
	id:'pixadmin',
	frame:true,
	layout:'column',
	autoScroll:true,
	items:[{
		columnWidth:0.5,
		items:[title_form,pix_form,case_list]
	},{
		columnWidth:0.5,
		items:[pix_panel]
	},{
		columnWidth:1,
		items:[content_form]
	}]
});
var read_data = function(){
	var v = project_combo.getValue();
	pix_store.load({params:{hash_id:v}});
	case_store.load({params:{project_id:v}});
	content_store.load({params:{type:v}});
};