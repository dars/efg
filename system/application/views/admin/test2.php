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
		var tmp_node;
		Ext.onReady(function(){
			var rcm = new Ext.menu.Menu({
    			items:[{
    				id:'add_tax',
	    			text:'新增類別',
	    			iconCls:'icon-drag',
	    			handler:function(){console.log(tmp_node.id);}
	    		},{
	    			id:'edit_tax',
	    			text:'編輯類別',
	    			iconCls:'icon-drag',
	    			handler:function(){console.log(tmp_node.id);}
	    		},{
	    			id:'del_tax',
	    			text:'刪除類別',
	    			iconCls:'icon-drag',
	    			handler:function(){console.log(tmp_node.id);}
	    		}]
	    	});
	    	function showRightClickMenu(node,e){
	    		tmp_node=node;
				this.showAt(e.getPoint());
	    	}
			var root =new Ext.tree.AsyncTreeNode({
				id:'product',
				text:'分類列表',
				draggable:false,
				leaf:false
			});
			var tree_loader = new Ext.tree.TreeLoader({
				dataUrl:'get_taxonomy_list',
				requestMethod:'post'
			});
			var tree = new Ext.tree.TreePanel({
				title:'分類設定',
				el:'tree-div',
				rootVisible:false,
				useArrows:true,
				autoScroll:true,
				animate:true,
				enableDD:true,
				containerScroll:true,
				loader:tree_loader,
			});
			tree.setRootNode(root);
			tree.render();
    		tree.on('nodedrop',function(e){
    			var tmp_tree = tree.root.childNodes[0].childNodes;
    			var count = tmp_tree.length;
    			var i = 0;
    			while(i<count){
    				console.log(tmp_tree[i].id+" : "+tmp_tree[i].text);
    				i++;
    			}
    		});
    		tree.on('contextmenu',showRightClickMenu,rcm)
    		var treeEditor = new Ext.tree.TreeEditor(tree,{
    			allowBlank:false
    		});
    		treeEditor.on('beforestartedit',function(treeEditor){
    			return treeEditor.editNode.isLeaf();
    		});
    		treeEditor.on('complete',function(treeEditor){
    			alert(treeEditor.editNode.text);
    		});
    		
    		/* 重讀tree data */
    		Ext.fly('reload').on('click',function(){
    			tree.getRootNode().reload();
    		});
		});
		</script>
	</head>
	<body>
		<div id="grid"></div>
		<div id="tree-div"></div>
		<button id="reload" type='button'>重整</button>
	</body>
</html>
