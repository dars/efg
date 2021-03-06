var info_id;
var info_cate;
var info_str;
Ext.onReady(function(){
	Ext.QuickTips.init();
	Ext.override(Ext.data.Store, {
		storeOptions : function(o) {
			o = Ext.apply({}, o);
			if(o.params){
				o.params = Ext.apply({}, o.params);
			}
			delete o.callback;
			delete o.scope;
			this.lastOptions = o;
		}
	});
	var vp = new Ext.Viewport({
		layout:'border',
		items:[{
			region:'north',
			height:80,
			html:"<img src='"+base_url+"public/images/admin_logo.png' />"
		},tree,tp,{
			region:'south',
			height:30,
			html:"<div id='footer'>2010 &copy; 迪傑工作室</div>"
		}]
	});
	Ext.fly('footer').setStyle('textAlign','center').setStyle('paddingTop','5px');
});

function show_Growl(type,title,string){
	if(type == 1){
		Ext.ux.Growl.notify({
			title: title, 
			message: string,
			iconCls:'x-growl-notice',
			alignment: "tr-tr",
			offset: [-10, 10]
		});
	}else{
		Ext.ux.Growl.notify({
			title: title, 
			message: string,
			iconCls:'x-growl-error',
			alignment: "tr-tr",
			offset: [-10, 10]
		});
	}
}
function info_tab1(){
	ds.load({params:{id:info_id,ps:'',type:'',lang:''}});
	node_title.show();
	lang_combo.show();
	title_combo.setReadOnly(true);
}
function info_tab2(){
	if(titles_store.getCount()<1){
		show_taxo_tab(info_cate,info_str,'zhtw');
		show_Growl(2,'警告','尚未設定分類，請先設定分類');
	}else{
		title_combo.setValue(titles_store.getAt(0).id);
		lang_combo.hide();
		wel_form.getForm().el.mask('資料讀取中','x-mask-loading');
		ds.baseParams.type = titles_store.getAt(0).id;
		ds.baseParams.lang = 'zhtw';
		ds.load();
		node_title.hide();
		title_combo.setReadOnly(false);
	}
}
function show_info_tab(category,str,id){
	info_id = id;
	tp.get(0).setTitle('文字簡介 - '+str);
	tp.activate(0);
	wel_form.getForm().el.mask('資料讀取中','x-mask-loading');
	titles_store.un('load',info_tab1);
	titles_store.un('load',info_tab2);
	titles_store.on('load',info_tab1);
	titles_store.load({params:{category:category}});
}
function show_info2_tab(category,str){
	info_cate = category;
	info_str = str;
	tp.get(0).setTitle(str);
	tp.activate(0);
	titles_store.baseParams.category = category;
	titles_store.un('load',info_tab1);
	titles_store.un('load',info_tab2);
	titles_store.on('load',info_tab2);
	titles_store.load();
}
function show_taxo_tab(category,str,lang){
	tp.body.mask('資料讀取中','x-mask-loading');
	var tabItem = tp.getItem('taxonomy');
	taxo_root.id = category+'_'+lang;
	if(typeof tabItem === 'undefined'){
		tabItem = tp.add({
			id:'taxonomy',
			title:'分類設定 - '+str,
			items:[taxo_tree],
			autoScroll:true
		});
	}else{
		tp.get('taxonomy').setTitle('分類設定 - '+str);
	}
	taxo_tree.getRootNode().reload();
	tp.activate('taxonomy');
}
function show_project_tab(str){
	var tabItem = tp.getItem('project');
	taxo_root.id = 'project';
	if(typeof tabItem === 'undefined'){
		tabItem = tp.add({
			id:'project',
			title:str,
			items:[project_panel],
			autoScroll:true
		});
		tp.activate(tabItem);
	}else{
		tp.get('project').setTitle(str);
		tp.activate('project');
	}
	project_store.load({params:{category:'project'}});
}
function show_news_tab(category){
	tp.body.mask('資料讀取中','x-mask-loading');
	var tabItem = tp.getItem('news');
	if(typeof tabItem === 'undefined'){
		tabItem = tp.add({
			id:'news',
			title:'最新消息',
			items:[news_grid],
			autoScroll:true
		});
	}
	news_ds.load({params:{start:0,limit:20}});
	tp.activate('news');
}