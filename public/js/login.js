var login_form = new Ext.form.FormPanel({
	labelAlign:'right',
	labelWidth:100,
	frame:true,
	defaultType:'textfield',
	defaults:{
		anchor:'85%',
		msgTarget:'side',
		allowBlank:false
	},
	items:[{
		fieldLabel:'登入帳號',
		name:'username'
	},{
		inputType:'password',
		fieldLabel:'登入密碼',
		name:'password'
	}],
	buttons:[{
		text:'登入',
		handler:function(){
			//if(login_form.getForm().isValid()){
				login_win.close();
				show_Growl(1,'訊息','您已登入成功');
			//}
		}
	}]
});

var login_win = new Ext.Window({
	title:'請登入管理帳號密碼',
	renderTo:Ext.getBody(),
	layout:'fit',
	width:400,
	height:150,
	closable:false,
	modal:true,
	items:[login_form]
});