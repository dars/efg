<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>{page_title}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?=site_url('public/css/style.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=site_url('public/css/layout.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=site_url('public/css/slickmap.css')?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=site_url('public/css/menu.css');?>" type="text/css" />
<link rel="stylesheet" href="<?=site_url('public/css/scrollimage.css');?>" type="text/css" />
<!--[if lt IE 7]>
	<link href="<?=base_url('public/css/ie_style.css')?>" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="<?=site_url('public/js/jquery-1.4.4.min.js');?>"></script>
<script type="text/javascript" src="<?=site_url('public/js/jquery.tools.min.js');?>"></script>
</head>

<body id="page1">
	<div id="main">
		<!-- header -->
		<div id="header">
			<?php $this->load->view('layout/head')?>
		</div>
		<!-- content -->
		<div id="content">
			<div class="wrapper">
				<div class="col-1">
					<?php $this->load->view('layout/sub_nav')?>
				</div>
				<div class="col-2">
					{page_content}
				</div>
 			</div>
		</div>
		<!-- footer -->
		<div id="footer">
			<?php $this->load->view('layout/footer')?>
		</div>
	</div>
</body>
</html>