<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/ninkasi.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>includes/ui-elements.css" />
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<!-- 	<link type="text/css" href="<?php echo base_url();?>includes/css/main-theme/jquery-ui-1.8.22.custom.css" rel="stylesheet" /> -->
	<script type="text/javascript" src="<?php echo base_url();?>includes/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>includes/js/jquery-ui-1.8.22.custom.min.js"></script>
	<script>
		$(document).ready(function() {
			$('div.tabs').hide();
			$('div.tab ul li:first').addClass('ativo');
			$('div.tab ul li a').click(function() {
			  $('div.tab ul li').removeClass('ativo');
			  $(this).parent().addClass('ativo');
			});
			
			$('div.button ul li:first').addClass('ativo');
			$('div.button ul li a').click(function() {
			  $('div.button ul li').removeClass('ativo');
			  $(this).parent().addClass('ativo');
			});
			
			$('div.pages').hide();
			$('#page1').show();
		 	$('div.tabs').hide();			$('#tab1').show();
		});
		
		function show_item(clazz, id){
			var group = 'div.' + clazz;
			$(group).hide();
			$(id).show();
		}
	</script>
</head>	
<body>
	<div id="main-wrap">		
		<div id="header"><?php include 'header.php'?></div>
		<div id="content"><?php echo $contents ?></div>	
		<div id="footer">footer</div>
	</div>
</body>
</html>